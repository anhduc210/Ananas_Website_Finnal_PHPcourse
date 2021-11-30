(function ($, window) {
    const loadCity = $('select[name=customerCity]');
    const loadDistrict = $('select[name=customerDistrict]');
    const loadWard = $('select[name=customerWard]');
    const orderForm = $('form#orderForm');

    // Check customerDistrict is null to load page
    if(loadDistrict.length && loadDistrict.val() == null){
        location.reload();
    }

    // Declare function
    // Load all district by city
    let loadDistrictByCity;
    // Get shipping price and append it to shippingPriceElement
    let getAndAppendShippingFeeByDistrict;

    // Get some element
    const shippingFeeElement = $('span.shipping-fee');
    const totalPriceElement = $('span.total-price');
    const currentPriceElement = $('span.current-price');
    const discountElement = $('span.discount');
    const shippingTypeElement = $('input[name=shippingType]');
    const cardFeeElement = $('span.card-fee');

    // Get value of currentPriceElement, shipppingPriceElement and totalPriceElement
    const currentPrice = convertNumberBy(currentPriceElement.text(), '.');
    let _shippingFee = convertNumberBy(shippingFeeElement.text(), '.');
    let totalPrice = convertNumberBy(totalPriceElement.text(), '.');
    let cardFee = convertNumberBy(cardFeeElement.text(), '.');
    let _paymentPercent = 0;

    const templateTermPopup = $('#templatePopupTerms');
    const templateTermMomoPopup = $('#templatePopupMomoTerms');

    function resetPaymentOptions() {
        $("#cb5").prop("checked", false);
        $("#cb6").prop("checked", false);
        $("#cb7").prop("checked", false);
    }

    // Get city and district
    async function getCityAndDistrict() {
        const dataLocation = {
            action: 'get_provinces',
        }

        // Call ajax to get all data of location
        const resultLocations = await callAjax('GET', dataLocation);
        resultLocations.forEach((result) => {
            loadCity.append($('<option>', {
                value: result.term_id,
                text: result.name,
            }));
        });

        const clearLocationOnSelectBoxes = (justClearDistrict = false) => {
            if (!justClearDistrict) {
                // Clear data on loadCity
                loadCity.find('option:gt(0)').remove();
            }
            // Clear data on loadDistrict
            loadDistrict.find('option:gt(0)').remove();
            // loadDistrict.parent().addClass('has-error');
        }

        // Load all district by city
        let allDistricts = [];
        loadDistrictByCity = (parentId) => {
            // If exist parentId will load all data of district by parentId
            if (parentId) {
                const dataRequest = {
                    action: 'listDistrict',
                    termParent : parentId
                }
                var resultDistricts = '';
                // Call ajax to get all data of location
                jQuery.ajax({
                    type: "POST",
                    dataType: "json",
                    url: ajaxUrl,
                    data: dataRequest,
                    success: function (response) {
                        resultDistricts = response;
                        resultDistricts.forEach((result) => {
                            loadDistrict.append($('<option>', {
                                value: result.term_id,
                                text: result.name,
                            }));
                        });
                        allDistricts = resultDistricts;
                    }
                });
            }
            // Else clear all data on select box
            else {
                clearLocationOnSelectBoxes(true);
            }
        }

        loadWardByDistrictID = (parentId) => {
            // If exist parentId will load all data of district by parentId
            if (parentId) {
                const dataRequest = {
                    action: 'listDistrict',
                    termParent : parentId
                }
                var resultWard = '';
                // Call ajax to get all data of location
                jQuery.ajax({
                    type: "POST",
                    dataType: "json",
                    url: ajaxUrl,
                    data: dataRequest,
                    success: function (response) {
                        resultDistricts = response;
                        resultDistricts.forEach((result) => {
                            loadWard.append($('<option>', {
                                value: result.term_id,
                                text: result.name,
                            }));
                        });
                    }
                });
            }
            // Else clear all data on select box
            else {
                clearLocationOnSelectBoxes(true);
            }
        }

        loadCity.change(async (event) => {
            clearLocationOnSelectBoxes(true);

            const that = event.currentTarget;
            const parentId = parseInt($(that).val());
            loadDistrictByCity(parentId);
            loadWard.find('option:gt(0)').remove();
        });

        loadDistrict.change(async (event) => {
            loadWard.find('option:gt(0)').remove();
            const that = event.currentTarget;
            const parentId = parseInt($(that).val());
            loadWardByDistrictID(parentId);
        });

        // Get speed and normal price element
        const speedFeeElement = $('.speed-fee');
        const normalFeeElement = $('.normal-fee');

        const appendTotalPrice = (totalPrice, shippingFee, currentPrice, element) => {
            // Parse shipping fee to float
            shippingFee = parseFloat(shippingFee);
            totalPrice = shippingFee + totalPrice;

            // Card fee
            let cardFee = totalPrice * _paymentPercent;
            cardFeeElement.text(formatNumber(cardFee, '.'));

            // Re-cal total price
            totalPrice += cardFee;

            totalPrice = formatNumber(totalPrice);
            element.text(totalPrice);
        };

        const appendShippingFee = (element, shippingFee, isNormalPrice = false, isCheck = false) => {
            shippingFee = parseFloat(shippingFee);
            if (shippingFee === 0 || !shippingFee) {
                element.text('Miễn Phí');
                shippingFeeElement.text(0);
                appendTotalPrice(totalPrice, 0, currentPrice, totalPriceElement);
            } else {
                element.text(`${formatNumber(shippingFee, '.')} VNĐ`);
                // When change select box will set value of shipping price is normal price
                if (isNormalPrice || isCheck) {
                    shippingFeeElement.text(formatNumber(shippingFee, '.'));
                    appendTotalPrice(totalPrice, shippingFee, currentPrice, totalPriceElement);
                }

            }
            _shippingFee = shippingFee;
        };

        getAndAppendShippingFeeByDistrict = (districtId, samePrice = null) => {
            const foundDistrict = allDistricts.find(function (district) {
                return district.term_id === districtId;
            });
            let speedFee = foundDistrict ? foundDistrict.speed_fee : 0;
            let normalFee = foundDistrict ? foundDistrict.normal_fee : 0;

            if(samePrice !== null){
                speedFee = samePrice;
                normalFee = samePrice;
            }

            appendShippingFee(speedFeeElement, speedFee);
            appendShippingFee(normalFeeElement, normalFee, true);

            // Set type of shipping
            shippingTypeElement.change((event) => {
                const that = event.currentTarget;
                const value = $(that).val();
                if (value === "speed") {
                    appendShippingFee(speedFeeElement, speedFee, false, true);
                } else {

                    appendShippingFee(normalFeeElement, normalFee, false, true);
                }
            });
        }

        loadDistrict.change(async (event) => {
            const that = event.currentTarget;
            const districtId = parseInt($(that).val());
            const data = {
                action: "checkAllPromotion",
                provinceId: districtId
            };
            const checkPromotion = await callAjax('POST', data);
            let samePrice = null;
            if(checkPromotion){
                const {typeShipping} = checkPromotion;
                const priceShipping = parseInt(checkPromotion.priceShipping);
                if(typeShipping){
                    samePrice = priceShipping;
                }
            }
            console.log(samePrice);
            getAndAppendShippingFeeByDistrict(districtId, samePrice);
        });
    }
    //endcode
    if (loadCity.length) {
        setTimeout(async () => {
            await getCityAndDistrict();
        }, 0);
    }

    async function ajaxCreateOrder(data, link) {
        let result;
        try {
            result = await callAjax('POST', data);
            if (!result.code && !result.success) {
                const errorQuantityElement = $('.error-quantity');
                if (result.type === 'OUT_OF_INVENTORY') {
                    errorQuantityElement.find('.item-notice').html('Sản phẩm hiện tại không đủ size / số lượng bạn cần');
                }else if(result.type === 'LIMITED_PRODUCTS'){
                    errorQuantityElement.find('.item-notice').html('Có sản phẩm trong giỏ đã được mua quá số lượng quy định hoặc bạn đã mua nó trước đây');
                }else if(result.type === 'EXIST_PRODUCT_IS_PRE_ORDER'){
                    errorQuantityElement.find('.item-notice').html(result.errorData);
                } else {
                    errorQuantityElement.find('.item-notice').html(result.message);
                    // errorQuantityElement.find('.item-notice').html('Lỗi không xác định');
                }
                errorQuantityElement.css('display', 'block');
                return false;
            }
        } catch (err) {
            console.error(err);
        }
        if (result) {
            ggTrackingCheckOutStep(STEP_ORDER_COMPLETED);
            const paymentUrl = result.paymentUrl;
            if (!paymentUrl || paymentUrl === "") {
                return link;
            } else {
                return paymentUrl;
            }
        }
        return false;
    }

    async function createOnePayTerm(data, link) {
        let onePayTermPopup = new jBox('Modal', {
            id: "jBoxTermPopup",
            addClass: 'jBox-popupTerms',
            overlay: true,
            isolateScroll: false,
            closeOnClick: false,
            content: templateTermPopup,
            onCreated: function () {
                this.wrapper.find('#cb1').click(function () {
                    $('#templatePopupTerms .btn-yes').toggleClass('disabled');
                }.bind(this));

                this.wrapper.find('.btn-no').click(function () {
                    this.close();
                    this.wrapper.find('#cb1').prop("checked", false);
                    resetPaymentOptions();
                }.bind(this));

                this.wrapper.find('.btn-yes').click(async function () {
                    if ($('#cb1').is(':checked')) {
                        const linkRedirect = await ajaxCreateOrder(data, link)
                        if (linkRedirect) {
                            location.href = linkRedirect;
                        } else {
                            this.close();
                        }
                    }
                }.bind(this));
            },
            onCloseComplete: function () {
                this.destroy();
            }
        });

        onePayTermPopup.open();
        return;
    }

    async function createMomoTerm(data, link){
        let termPopup = new jBox('Modal', {
            id: "jBoxTermPopup",
            addClass: 'jBox-popupTerms',
            overlay: true,
            isolateScroll: false,
            closeOnClick: false,
            content: templateTermMomoPopup,
            onCreated: function () {
                this.wrapper.find('#cb1-momo').click(function () {
                    $('#templatePopupMomoTerms .btn-yes').toggleClass('disabled');
                }.bind(this));

                this.wrapper.find('.btn-no').click(function () {
                    this.close();
                    this.wrapper.find('#cb1-momo').prop("checked", false);
                    resetPaymentOptions();
                }.bind(this));

                this.wrapper.find('.btn-yes').click(async function () {
                    if ($('#cb1-momo').is(':checked')) {
                        const linkRedirect = await ajaxCreateOrder(data, link)
                        if (linkRedirect) {
                            location.href = linkRedirect;
                        } else {
                            this.close();
                        }
                    }
                }.bind(this));
            },
            onCloseComplete: function () {
                this.destroy();
            }
        });
        console.log(templateTermPopup)

        termPopup.open();
        return;
    }

    // Click to complete order
    $('.btn-complete-detail').click(async (event) => {
        const that = event.currentTarget;
        const link = $(that).data('href'); // because '$(this)' will be out of scope in your callback

        let elementsHaveError = [];
        $("#orderForm input[type='text'], #orderForm select").each(function () {
            const element = $(this);
            const elementName = element.attr('name');
            const elementValue = element.val();
            const typeOfElement = element.prop('tagName').toLowerCase();
            if (typeOfElement === 'input') {
                if (elementValue === '') {
                    addError(element);
                    elementsHaveError.push(element);
                }
                // if(elementName === 'customerEmail' && elementValue && !validateEmail(elementValue)){
                //     addError(element, EMAIL_INVALID);
                //     elementsHaveError.push(element);
                // }
                if(elementName === 'customerPhone' && elementValue && !validatePhoneNumberWith10Characters(elementValue)){
                    addError(element, PHONE_INVALID);
                    elementsHaveError.push(element);
                }
            }

            if (typeOfElement === 'select' && elementValue === '0') {
                addError(element, null, true);
                elementsHaveError.push(element);
            }
        });

        if (elementsHaveError && elementsHaveError.length) {
            scrollToElement(elementsHaveError[0]);
        }

        // Validate order Form data with some input text
        const errors = orderForm.serializeArray().find((input) => {
            const inputName = input.name;
            const inputValue = input.value;
            // if (inputName === 'customerEmail') {
            //     const checkValidate = validateEmail(inputValue); // Function validateEmail will be returned FALSE if value not an email
            //     return !checkValidate; // Because function return false so I'll return it is true to get for error
            // }
            if (inputName === 'customerPhone') {
                const checkValidate = validatePhoneNumberWith10Characters(inputValue); // Function validateEmail will be returned FALSE if value not an email
                return !checkValidate; // Because function return false so I'll return it is true to get for error
            }
            if (inputValue === '' || inputValue === '0') {
                return true;
            } else {
                return false;
            }

        });

        if (!errors) {
            // Get notification value
            const isNotification = findInputElementByName('isNotification').is(':checked');

            // Get all value in order form
            const formData = orderForm.serializeArray().reduce(function (obj, item) {
                obj[item.name] = item.value;
                return obj;
            }, {});

            formData.isNotification = isNotification;

            // console.log(formData);

            /** Way 1: Call api from BackEnd */
            // const getListProductFromCart = await callAjax('GET', {action: 'getListCart'});
            /** Way 2: Direct call from html */
            const classOfListProductFromCart = $('.listProductFromCart');
            const totalProducts = classOfListProductFromCart.length;

            const listProductFromCart = [];
            for (let i = 0; i < totalProducts; i++) {
                const productElement = $(classOfListProductFromCart[i]);
                const productInformation = {
                    id: productElement.data('id'),
                    size: productElement.data('size'),
                    quantity: productElement.data('quantity'),
                };
                listProductFromCart.push(productInformation)

            }

            const ananasNounce = $("#ananas_nounce").val();

            const data = {
                action: 'create_order',
                ...formData,
                listOfProduct: listProductFromCart,
                ananas_nounce: ananasNounce
            };

            if(!data.paymentType || data.paymentType === undefined){
                const errorQuantityElement = $('.error-quantity');
                errorQuantityElement.find('.item-notice').html('Vui lòng chọn phương thức thanh toán');
                errorQuantityElement.css('display', 'block');
                return;
            }

            if (data.paymentType === TYPE_DIRECT) {
                const linkRedirect = await ajaxCreateOrder(data, link);
                if (linkRedirect) {
                    location.href = linkRedirect;
                }
            } else {
                if(data.paymentType === TYPE_MOMO){
                    await createMomoTerm(data, link);
                }
                else {
                    await createOnePayTerm(data, link);
                }
                
            }
            return;

            let result;
            try {
                result = await callAjax('POST', data);
                if (!result.code && !result.success) {
                    const errorQuantityElement = $('.error-quantity');
                    if (result.type === 'OUT_OF_INVENTORY') {
                        errorQuantityElement.find('.item-notice').html('Sản phẩm hiện tại không đủ size / số lượng bạn cần');
                    } else {
                        errorQuantityElement.find('.item-notice').html('Lỗi không xác định');
                    }
                    errorQuantityElement.css('display', 'block');
                    return;
                }
            } catch (err) {
                console.error(err);
            }
            if (result) {
                ggTrackingCheckOutStep(STEP_ORDER_COMPLETED);
                const paymentUrl = result.paymentUrl;
                if (!paymentUrl || paymentUrl === "") {
                    location.href = link;
                } else {
                    location.href = paymentUrl;
                }
            }
        }
    });

    // Fill value into input
    function fillDataToInput(name, value, empty = false) {
        const inputElement = findInputElementByName(name);
        inputElement.val(value);

        if (empty) {
            addError(inputElement);
        } else {
            removeError(inputElement);
        }
    }

    // Fill value into select box
    function fillDataToSelect(name, value, empty = false) {
        const selectElement = findSelectElementByName(name);
        // If select box is customerCity will load data from customerDistrict
        if (name === 'customerCity') {
            loadDistrictByCity(value);
        }
        if (name === 'customerDistrict') {
            getAndAppendShippingFeeByDistrict(value);
        }
        // Base on id of city or district to set value for select box
        selectElement.val(value);
        if (empty) {
            addError(selectElement, name, true);
        } else {
            removeError(selectElement, true);
        }
    }

    $('.checkToGetUserInfo').change(async (event) => {
        const that = event.currentTarget;
        const isCheck = $(that).is(':checked');
        const dataGetUser = {
            action: 'getInfoUser',
        };
        const resultUser = await callAjax('GET', dataGetUser);
        // Call ajax to check user login
        // If don't exist user then show error
        if (resultUser.code === 404) {
            console.error(resultUser.message);
            $(that).prop('checked', false);
        } else {
            if (isCheck) {
                // Replace data
                for (const key in resultUser) {
                    const value = resultUser[key];
                    if (key === 'customerCity' || key === 'customerDistrict') {
                        fillDataToSelect(key, value);
                    } else {
                        fillDataToInput(key, value);
                    }
                }
                console.log(resultUser);
                $(that).prop('checked', true);
            } else {
                // Clear data
                const defaultData = {
                    customerName: null,
                    customerPhone: null,
                    customerEmail: null,
                    customerAddress: null,
                    customerCity: 0,
                    customerDistrict: 0
                }

                for (const key in defaultData) {
                    const value = defaultData[key];
                    if (key === 'customerCity' || key === 'customerDistrict') {
                        fillDataToSelect(key, value, true);
                    } else {
                        fillDataToInput(key, value, true);
                    }
                }
            }
        }
    });

    $('.paymentType').change(async (event) => {
        const that = event.currentTarget;
        const paymentType = $(that).val();
        const response = await callAjax('GET', {
            action: 'get_payment_percent',
            paymentType
        });
        const paymentPercent = response.paymentPercent;
        _paymentPercent = paymentPercent;

        let reTotalPrice = totalPrice + _shippingFee;
        let cardFee = reTotalPrice * _paymentPercent;

        cardFeeElement.text(formatNumber(cardFee, '.'));

        // Re-cal total price
        reTotalPrice += cardFee;
        reTotalPrice = formatNumber(reTotalPrice);
        totalPriceElement.text(reTotalPrice);
    });
})(jQuery);