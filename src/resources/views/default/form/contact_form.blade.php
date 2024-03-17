

<form id="contactForm" method="POST">
    <div class="messages"></div>
    <div class="form-group">
        <label for="name">Imię *</label>
        <input id="name" type="text" name="name" placeholder="Imię *" required="" class="form-control">
        <div class="invalid-feedback"></div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="email">Email *</label>
                <input id="email" type="email" name="email" placeholder="Email *" required="" class="form-control">
                <div class="invalid-feedback"></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="phone">Telefon *</label>
                <input id="phone" type="text" name="phone" required="" placeholder="Telefon *" class="form-control">
                <div class="invalid-feedback"></div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="message">Wiadomość *</label>
        <textarea id="message" name="message" rows="5" placeholder="Wiadomość *" required="" class="form-control"></textarea>
        <div class="invalid-feedback"></div>
    </div>

    <div class="form-group">
        <div class="form-check">
            <input id="rule" type="checkbox" name="rule" placeholder="Rule" class="form-check-input">
            <label for="rule" class="form-check-label">{!! getConstField('contact_form_rule') !!}</label>
            <div class="invalid-feedback"></div>
        </div>
    </div>

    <div class="form-group">
        <div class="g-recaptcha" data-sitekey="{{$siteKey}}"></div>
        <div class="invalid-feedback"></div>
    </div>

    <input type="submit" value="Wyślij" class="themeht-btn primary-btn">
    <div id="alert" class="alert"></div>
</form>

@push('scripts.body.bottom')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script>
        document.getElementById('contactForm').addEventListener('submit', e => {
            e.preventDefault();
            submitForm(e.target);
        })
    </script>
@endpush
