<div class="page-header">
    <div class="page-header-content">
        <div class="page-title">
            <h1>
                <i class="fa fa-black-tie"></i>
                {{ t('registration') }}
            </h1>
        </div>
        <div class="heading-elements">
            <div class="heading-btn-group">
                <a href="#" data-form-submit="form" data-form-param="apply" class="btn btn-icon-block btn-link-success">
                    <i class="fa fa-save"></i>
                    <span>Zarejestruj</span>
                </a>
                <a href="#" class="btn btn-icon-block btn-link-danger app-history-back">
                    <i class="fa fa-remove"></i>
                    <span>{{ t('cancel') }}</span>
                </a>
            </div>
        </div>
        <div class="heading-elements-toggle">
            <i class="fa fa-ellipsis-h"></i>
        </div>
    </div>
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="{{ createUrl() }}"><i class="fa fa-home"> </i>Verone</a></li>
            <li><a href="{{ createUrl('Registration', 'Registration', 'index') }}">{{ t('registration') }}</a></li>
        </ul>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <form action="{{ createUrl('Registration', 'Registration', 'save') }}" method="post" id="form" style="display:block;margin:0 auto;width:600px;max-width:100%;text-align:center;">
                <div style="height:40px"></div>
                <h3>Krok 1.</h3>
                <p>Wejdź na poniższą stronę, zarejestruj nowe konto (jeśli jeszcze nie masz konta), a następnie dodaj swoją aplikację do listy w swoim koncie (zakładka Aplikacje).</p>
                <p><a style="font-size:16px;display:inline-block;" href="http://panel.veronecrm.com" target="_blank">http://panel.veronecrm.com</a></p>
                <div style="height:40px"></div>
                <h3>Krok 2.</h3>
                <p>Stworzony klucz wklej w poniże pole.</p>
                <input type="text" name="key" class="form-control text-center" value="{{ $app->openSettings('app')->get('id') }}" />
                <div style="height:40px"></div>
                <button type="button" data-form-submit="form" data-form-param="apply" class="btn btn-success">Zarejestruj</button>
            </form>
        </div>
    </div>
</div>
