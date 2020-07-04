@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Content manager</div>

                <div class="card-body">
                    <a href="/content">Content manager</a>
                    <br>

                    <h2>Редактировать структурный элемент</h2>
<form name="content-udate" action="http://" method="POST">
    <table cellpadding="12" cellspacing="0" style="border-size: 0px; border-collapse: collapse; width: 100%">
        <tr>
            <td style="width: 33%">
                <h3>Страница</h3>
                <select name="pages" size="10" style="width: 100%">
                @foreach ($coPages as $coPage)
                    <option value="{{ $coPage->name }}">{{ $coPage->title }}</option>
                @endforeach
                </select>
            </td>
            <td style="width: 33%">
                <h3>Блок</h3>
                <select name="pages" size="10" style="width: 100%">
                @foreach ($coBlocks as $coBlock)
                    <option value="{{ $coBlock->id }}">{{ $coBlock->title }}</option>
                @endforeach
                </select>
            </td>
            <td style="width: 34%">
                <h3>Элемент</h3>
                <select name="pages" size="10" style="width: 100%">
                </select>
            </td>
        </tr>
        <tr>
            <td style="width: 67%" colspan="2">
                <h4>Текст</h4>
                <textarea name="text" rows="10" style="width: 100%"></textarea>
            </td>
            <td style="width: 33%">
                <h4>Ссылка</h4>
                <input name="link" style="width: 100%">

                <h4>Картинка</h4>
                <input name="link" style="width: 100%">
            </td>
        </tr>
    </table>
</form>
                                                                 <br><hr>
<h2>Создать новый структурный элемент</h2>
(люб)
<form name="content-udate" action="http://" method="POST">
    <table cellpadding="12" cellspacing="0" style="border-size: 0px; border-collapse: collapse; width: 100%">
        <tr>
            <td style="width: 33%">
                <h3>Страница</h3>
                <select name="pages" size="10" style="width: 100%">
                @foreach ($coPages as $coPage)
                    <option value="{{ $coPage->name }}">{{ $coPage->title }}</option>
                @endforeach
                </select>
            </td>
            <td style="width: 33%">
                <h3>Блок</h3>
                <select name="pages" size="10" style="width: 100%">
                @foreach ($coPages as $coPage)
                    <option value="{{ $coPage->name }}">{{ $coPage->title }}</option>
                @endforeach
                </select>
            </td>
            <td style="width: 34%">
                <h3>Элемент</h3>
                <select name="pages" size="10" style="width: 100%">
                    <option value="main">Главная страница</option>
                    <option value="osago">Расчет ОСАГО</option>
                    <option value="tech-inspection">Техосмотр</option>
                    <option value="tech-inspection-item">Страница одного пункта техосмотра</option>
                    <option value="kbm-check">КМБ проверить</option>
                    <option value="kbm-restore">КМБ восстановить</option>
                    <option value="mulct-check">Проверка штрафов</option>
                    <option value="policy-check">Проверка полиса</option>
                    <option value="user-agreement">Пользовательское соглашение</option>
                    <option value="site-map">Карта сайта</option>
                    <option value="our-offices">Наши офисы</option>
                </select>
            </td>
        </tr>
        <tr>
            <td style="width: 67%" colspan="2">
                <h4>Текст</h4>
                <textarea name="text" rows="10" style="width: 100%"></textarea>
            </td>
            <td style="width: 33%">
                <h4>Ссылка</h4>
                <input name="link" style="width: 100%">

                <h4>Картинка</h4>
                <input name="link" style="width: 100%">
            </td>
        </tr>
    </table>
</form>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
