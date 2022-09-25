$(document).ready(function () {
    $('.js-button-click').click(function (event) {
        event.preventDefault();
        console.log('ajax');


        let js_get_form_info = this.closest('.js-get-form-info')
        let name = js_get_form_info.querySelector('.js-get-name');
        if (name.value.length < 4) {
            if (!name.classList.contains('error')) {
                name.classList.add('error')
            }
            return;
        } else {
            name.classList.remove('error')
        }
        let phone = js_get_form_info.querySelector('.js-get-phone');
        if (phone.value.replace(/\D/g, '').length < 10) {
            if (!phone.classList.contains('error')) {
                phone.classList.add('error')
            }
            return;
        } else {
            phone.classList.remove('error');
        }
        let email = js_get_form_info.querySelector('.js-get-email');
        if (phone.value.length < 4) {
            if (!email.classList.contains('error')) {
                email.classList.add('error')
            }
            return;
        } else {
            email.classList.remove('error');
        }

        let title = js_get_form_info.querySelector('.js-get-title');
        let last_name = js_get_form_info.querySelector('.js-get-last_name');
        // console.log(last_name != null ? last_name.value : '' );
        // console.log(title);
        //	Здесь нужно указать в каком формате мы будем принимать данные вот и все	отличие

        // принцип	тот же самый что и у обычного POST	запроса
        const request = new XMLHttpRequest();
        const url = window.ajaxUrl;
        const params = "action=ajax_send_mess" +
            "&name=" + name.value +
            "&phone=" + phone.value +
            "&last_name=" + (last_name != null ? last_name.value : '') +
            "&title=" + (title != null ? title.textContent.trim() : '')  +
            "&email=" + email.value;

        request.responseType = "json";
        request.open("POST", url, true);
        request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        request.addEventListener("readystatechange", () => {

            if (request.readyState === 4 && request.status === 200) {
                let obj = request.response;

                if (obj.status === 'ok') {
                    name.value = ''
                    phone.value = ''
                    email.value = ''
                    last_name != null ? last_name.value = '' : '';
                    // document.querySelector('.success_send').click()
                } else {
                    // document.querySelector('.error_send').click()
                }
            }
        });
        request.send(params);
    })
})

