const forms = document.querySelectorAll('[data-role="form-validate"]')

for (let i = 0; i < forms.length; i++) {
    formInit(forms[i])
}

function formInit (form) {
    const phone = form.querySelector('[data-role="form-input-phone"]')
    const name = form.querySelector('[data-role="form-input-name"]')

    phone.addEventListener('input', removeError)
    form.addEventListener('submit', validate)

    const maskPhone = new IMask(phone, { mask: '+{7} (000) 000-00-00' });
    const maskName = new IMask(name, { mask: /^[А-ЯЁa-zA-Z\s]+$/i });

    function removeError () {
        this.classList.remove('input-error')
    }

    function validate (e) {
        e.preventDefault()
        if (maskPhone.unmaskedValue.length < 11) {
            phone.classList.add('input-error')
        } else {
            fetchForm()
        }
    }

    async function fetchForm () {
        const url = form.getAttribute('action')
        const data = new FormData(form)
        data.append("action", "callback_form")
        fetch(url, {
            method: 'post',
            body: data,
        })
            .then(res => { return res.json() })
            .then(data => { success() })
            .catch(() => {
                alert('Похоже произошла ошибка, пожалуйста попробуйте позже')
                console.log('error')
            })

        function success () {
            console.log('success')
            closeModalForm(form)
            openThanks()
            phone.value = ''
            name.value = ''
        }
    }
}

function closeModalForm (node) {
    const fancyboxContent = node.closest('.fancybox__content')
    if (fancyboxContent) {
        const closeBtn = fancyboxContent.querySelector('.is-close-btn')
        closeBtn.click()
    }
}

function openThanks () {
    const thanks = document.querySelector('#modal-thanks')
    if (thanks) Fancybox.show([{ src: "#modal-thanks", type: "inline" }])
}

const modalThanksButton = document.querySelector('[data-element="modal-thanks-button"]')
modalThanksButton.addEventListener('click', () => closeModalForm(modalThanksButton))
