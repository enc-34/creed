@extends('layouts/contentNavbarLayout')

@section('title', 'Campagne statistic - Pages')
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('page-script')

@endsection
@section('content')

    <b>
        <h4 class="fw-bold py-3 mb-4">
            Modèles de message
        </h4>
    </b>

    <style>
        .collapse {
            justify-content: right;
            text-align: right;
        }

        .p-3 {
            background-color: gray;
        }

        .emoji {
            color: transparent;
            display: inline-block;
            font-size: 18px;
            font-style: normal;
            height: 25px;
            width: 25px;
        }

        .emoji::selection {
            background-color: highlight;
            color: transparent;
        }

        .emoji-image {
            font-size: 14px;
            line-height: 28px;
        }

        .emoji-button {
            cursor: pointer;
            margin: 5px;
        }

        .emoji-editor {
            -moz-appearance: textfield-multiline;
            -webkit-appearance: textarea;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
            box-sizing: border-box;
            cursor: text;
            font: medium -moz-fixed;
            font: -webkit-small-control;
            -webkit-font-smoothing: antialiased;
            height: 100px;
            overflow: auto;
            padding: 5px;
            resize: both;
            width: 100%;
        }

        .emoji-picker {
            background-color: #fff;
            border: 1px solid #ccc;
            position: absolute;
            width: 210px;
        }

        .emoji-picker a {
            cursor: pointer;
            display: inline-block;
            font-size: 20px;
            padding: 3px;
        }

        .emoji-selector {
            border-bottom: 1px solid #ccc;
            display: flex;
        }

        .emoji-selector li {
            margin: 5px;
        }

        .emoji-group {
            grid-template-columns: repeat(6, 16.66667%);
            height: 200px;
            overflow-y: scroll;
            padding: 3px;
        }
    </style>
    <br>

    <div class="row">

        <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
            <a class="navbar-brand" href="#"><i class="bx bxs-pencil">Campagne Janvier</i></a>
            <span></span>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">English.USA</span>
            </button>
            <div class="btn-group">
                <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">Categories</button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="javascript:void(0);">Marketing</a></li>
                    <li><a class="dropdown-item" href="javascript:void(0);">Services</a></li>
                    <li><a class="dropdown-item" href="javascript:void(0);">Authentification/a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                </ul>
            </div>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item">
                        <a class="dropdown-item" href="#"><i class="bx bx-question-mark"></i>Support Page</a>
                    </li>

                    <li>
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="submit"><a
                                class="dropdown-item" href="{{ route('pages-campagne-template-one') }}">Return</a></button>
                    </li>
                </ul>

            </div>
        </nav><br><br><br>

        <!-- Headings -->
        <div class="col">

            <div class="card mb-3">
                <h5 class="card-header">Langues</h5>
                <table class="table table-borderless">
                    <hr class="dropdown-divider"><br>
                    <tbody>
                        <tr>
                            <p class="mb-0" style="margin: 10px">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1">
                                English
                            </p>
                        </tr>
                        <tr>
                            <td class="py-3">
                                <select class="form-select" id="languages" name="languages[]">
                                    <option>language</option>
                                    <option value="af">Afrikaans</option>
                                    <option value="sq">Albanian - shqip</option>
                                    <option value="am">Amharic - አማርኛ</option>
                                    <option value="ar">Arabic - العربية</option>
                                    <option value="an">Aragonese - aragonés</option>
                                    <option value="hy">Armenian - հայերեն</option>
                                    <option value="ast">Asturian - asturianu</option>
                                    <option value="az">Azerbaijani - azərbaycan dili</option>
                                    <option value="eu">Basque - euskara</option>
                                    <option value="be">Belarusian - беларуская</option>
                                    <option value="bn">Bengali - বাংলা</option>
                                    <option value="bs">Bosnian - bosanski</option>
                                    <option value="br">Breton - brezhoneg</option>
                                    <option value="bg">Bulgarian - български</option>
                                    <option value="ca">Catalan - català</option>
                                    <option value="ckb">Central Kurdish - کوردی (دەستنوسی عەرەبی)</option>
                                    <option value="zh">Chinese - 中文</option>
                                    <option value="zh-HK">Chinese (Hong Kong) - 中文（香港）</option>
                                    <option value="zh-CN">Chinese (Simplified) - 中文（简体）</option>
                                    <option value="zh-TW">Chinese (Traditional) - 中文（繁體）</option>
                                    <option value="co">Corsican</option>
                                    <option value="hr">Croatian - hrvatski</option>
                                    <option value="cs">Czech - čeština</option>
                                    <option value="da">Danish - dansk</option>
                                    <option value="nl">Dutch - Nederlands</option>
                                    <option value="en">English</option>
                                    <option value="en-AU">English (Australia)</option>
                                    <option value="en-CA">English (Canada)</option>
                                    <option value="en-IN">English (India)</option>
                                    <option value="en-NZ">English (New Zealand)</option>
                                    <option value="en-ZA">English (South Africa)</option>
                                    <option value="en-GB">English (United Kingdom)</option>
                                    <option value="en-US">English (United States)</option>
                                    <option value="eo">Esperanto - esperanto</option>
                                    <option value="et">Estonian - eesti</option>
                                    <option value="fo">Faroese - føroyskt</option>
                                    <option value="fil">Filipino</option>
                                    <option value="fi">Finnish - suomi</option>
                                    <option value="fr">French - français</option>
                                    <option value="fr-CA">French (Canada) - français (Canada)</option>
                                    <option value="fr-FR">French (France) - français (France)</option>
                                    <option value="fr-CH">French (Switzerland) - français (Suisse)</option>
                                    <option value="gl">Galician - galego</option>
                                    <option value="ka">Georgian - ქართული</option>
                                    <option value="de">German - Deutsch</option>
                                    <option value="de-AT">German (Austria) - Deutsch (Österreich)</option>
                                    <option value="de-DE">German (Germany) - Deutsch (Deutschland)</option>
                                    <option value="de-LI">German (Liechtenstein) - Deutsch (Liechtenstein)</option>
                                    <option value="de-CH">German (Switzerland) - Deutsch (Schweiz)</option>
                                    <option value="el">Greek - Ελληνικά</option>
                                    <option value="gn">Guarani</option>
                                    <option value="gu">Gujarati - ગુજરાતી</option>
                                    <option value="ha">Hausa</option>
                                    <option value="haw">Hawaiian - ʻŌlelo Hawaiʻi</option>
                                    <option value="he">Hebrew - עברית</option>
                                    <option value="hi">Hindi - हिन्दी</option>
                                    <option value="hu">Hungarian - magyar</option>
                                    <option value="is">Icelandic - íslenska</option>
                                    <option value="id">Indonesian - Indonesia</option>
                                    <option value="ia">Interlingua</option>
                                    <option value="ga">Irish - Gaeilge</option>
                                    <option value="it">Italian - italiano</option>
                                    <option value="it-IT">Italian (Italy) - italiano (Italia)</option>
                                    <option value="it-CH">Italian (Switzerland) - italiano (Svizzera)</option>
                                    <option value="ja">Japanese - 日本語</option>
                                    <option value="kn">Kannada - ಕನ್ನಡ</option>
                                    <option value="kk">Kazakh - қазақ тілі</option>
                                    <option value="km">Khmer - ខ្មែរ</option>
                                    <option value="ko">Korean - 한국어</option>
                                    <option value="ku">Kurdish - Kurdî</option>
                                    <option value="ky">Kyrgyz - кыргызча</option>
                                    <option value="lo">Lao - ລາວ</option>
                                    <option value="la">Latin</option>
                                    <option value="lv">Latvian - latviešu</option>
                                    <option value="ln">Lingala - lingála</option>
                                    <option value="lt">Lithuanian - lietuvių</option>
                                    <option value="mk">Macedonian - македонски</option>
                                    <option value="ms">Malay - Bahasa Melayu</option>
                                    <option value="ml">Malayalam - മലയാളം</option>
                                    <option value="mt">Maltese - Malti</option>
                                    <option value="mr">Marathi - मराठी</option>
                                    <option value="mn">Mongolian - монгол</option>
                                    <option value="ne">Nepali - नेपाली</option>
                                    <option value="no">Norwegian - norsk</option>
                                    <option value="nb">Norwegian Bokmål - norsk bokmål</option>
                                    <option value="nn">Norwegian Nynorsk - nynorsk</option>
                                    <option value="oc">Occitan</option>
                                    <option value="or">Oriya - ଓଡ଼ିଆ</option>
                                    <option value="om">Oromo - Oromoo</option>
                                    <option value="ps">Pashto - پښتو</option>
                                    <option value="fa">Persian - فارسی</option>
                                    <option value="pl">Polish - polski</option>
                                    <option value="pt">Portuguese - português</option>
                                    <option value="pt-BR">Portuguese (Brazil) - português (Brasil)</option>
                                    <option value="pt-PT">Portuguese (Portugal) - português (Portugal)</option>
                                    <option value="pa">Punjabi - ਪੰਜਾਬੀ</option>
                                    <option value="qu">Quechua</option>
                                    <option value="ro">Romanian - română</option>
                                    <option value="mo">Romanian (Moldova) - română (Moldova)</option>
                                    <option value="rm">Romansh - rumantsch</option>
                                    <option value="ru">Russian - русский</option>
                                    <option value="gd">Scottish Gaelic</option>
                                    <option value="sr">Serbian - српски</option>
                                    <option value="sh">Serbo-Croatian - Srpskohrvatski</option>
                                    <option value="sn">Shona - chiShona</option>
                                    <option value="sd">Sindhi</option>
                                    <option value="si">Sinhala - සිංහල</option>
                                    <option value="sk">Slovak - slovenčina</option>
                                    <option value="sl">Slovenian - slovenščina</option>
                                    <option value="so">Somali - Soomaali</option>
                                    <option value="st">Southern Sotho</option>
                                    <option value="es">Spanish - español</option>
                                    <option value="es-AR">Spanish (Argentina) - español (Argentina)</option>
                                    <option value="es-419">Spanish (Latin America) - español (Latinoamérica)</option>
                                    <option value="es-MX">Spanish (Mexico) - español (México)</option>
                                    <option value="es-ES">Spanish (Spain) - español (España)</option>
                                    <option value="es-US">Spanish (United States) - español (Estados Unidos)</option>
                                    <option value="su">Sundanese</option>
                                    <option value="sw">Swahili - Kiswahili</option>
                                    <option value="sv">Swedish - svenska</option>
                                    <option value="tg">Tajik - тоҷикӣ</option>
                                    <option value="ta">Tamil - தமிழ்</option>
                                    <option value="tt">Tatar</option>
                                    <option value="te">Telugu - తెలుగు</option>
                                    <option value="th">Thai - ไทย</option>
                                    <option value="ti">Tigrinya - ትግርኛ</option>
                                    <option value="to">Tongan - lea fakatonga</option>
                                    <option value="tr">Turkish - Türkçe</option>
                                    <option value="tk">Turkmen</option>
                                    <option value="tw">Twi</option>
                                    <option value="uk">Ukrainian - українська</option>
                                    <option value="ur">Urdu - اردو</option>
                                    <option value="ug">Uyghur</option>
                                    <option value="uz">Uzbek - o‘zbek</option>
                                    <option value="vi">Vietnamese - Tiếng Việt</option>
                                    <option value="wa">Walloon - wa</option>
                                    <option value="cy">Welsh - Cymraeg</option>
                                    <option value="fy">Western Frisian</option>
                                    <option value="xh">Xhosa</option>
                                    <option value="yi">Yiddish</option>
                                    <option value="yo">Yoruba - Èdè Yorùbá</option>
                                    <option value="zu">Zulu - isiZulu</option>
                                </select>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <!-- Customizing headings -->



        <div class="col-lg-5 ">
            <!-- Input Sizing -->

            <div class="card mb-4  ">
                <h5 class="card-header">Edit template <button class="btn btn-outline-success my-2 my-sm-0"
                        type="submit">Send</button>
                </h5>
                <div class="card-body">

                    <hr class="dropdown-divider">
                    <h5 class="fw-bold py-3 mb-4">
                        Titre<span class="text-muted fw-light"><small> Optional</small></span>
                    </h5>
                    Add a title or choose what media type you will use for this title.

                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                       <button type="button" class="close" data-dismiss="alert">×</button>
                       <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    <div class="p-3 mb-2 bg-light text-dark $gray-500">
                        <div class="mb-3">
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"
                                id="typeTitleId">
                                <option selected>No One</option>
                                <option value="textItem">Text</option>
                                <option value="imageItem">Image</option>
                                <option value="videoItem">Video</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <div class="card" id="textTitleIdCard">
                                <div class="card mb-4">
                                    <h5 class="card-header">Text Title</h5>
                                    <div class="card-body">
                                        <form>
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingInput"
                                                    placeholder="" aria-describedby="floatingInputHelp" />
                                                <label for="floatingInput">Title</label>
                                                <div id="floatingInputHelp" class="form-text">We'll never share your
                                                    details
                                                    with anyone else.</div>
                                            </div>
                                            <div class="mb-3">
                                                <button type="submit" class="btn btn-outline-success my-2 my-sm-0">VALID
                                                    TITLE</button>
                                                <br>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="card" id="imageTitleIdCard">
                                <h5 class="card-header">Upload Image</h5>
                                <div class="card-body">
                                  @csrf
                                    <form method="POST" enctype="multipart/form-data" id="upload_image_form"
                                        action="javascript:void(0)">
                                        <span class="alert displaynone" id="responseMsg"></span>

                                        <div class="col-md-12 mb-2">
                                            <img id="image_preview_container"
                                                src="{{ asset('images/image-preview.png') }}" alt="preview image"
                                                style="max-height: 150px;">
                                        </div>
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Image</label>
                                            <input class="form-control" type="file" id="formFileImage"
                                                name="formFileImage" accept="image/*">
                                            <span class="text-danger" id="err_file"></span>
                                        </div>
                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-outline-success my-2 my-sm-0"
                                                id="formFileImageSubmit" value="formFileImageSubmit" name="formFileImageSubmit">VALID
                                                IMAGE</button>
                                            <br>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card" id="videoTitleIdCard">
                                <h5 class="card-header">Upload Video</h5>

                                <div class="card-body">

                                    <form id="upload_video_form" method="POST" action="{{ route('pages-campagne-template-three-post') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div id="videoSourceWrapper" class="col-md-12 mb-2">
                                            <video style="width: 100%;" controls>
                                                <source id="videoSource" />
                                            </video>


                                        </div>


                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Video</label>
                                            <input class="form-control" type="file" id="uploadVideoFile"
                                                accept="audio/*,video/*" name="formFileVideo">
                                        </div>
                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-outline-success my-2 my-sm-0"
                                                value="formFileVideoSubmit" id="formFileVideoSubmit" name="formFilVideoSubmit">VALID
                                                VIDEO</button>
                                            <br>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <h5 class="fw-bold py-3 mb-4">Body </h5>
                        <div id="message" data-emojiarea data-type="image" data-global-picker="true">
                            <i class="emoji emoji-smile emoji-button">&#x1f604;</i>
                            <textarea name="Message" type="text" rows="25" cols="100" class="form-control">&#x1f604;"il n'existe que deux choses infinies ,l'univers et la bêtise humaine ...mais pour l'univers je n'ai pas de certitude absolue."</textarea>

                        </div>
                        <button type="submit" onclick="show('message')" class="btn btn-outline-success my-2 my-sm-0"
                            id="buttonPreview">View preview</button>
                        <br>

                    </div>
                    <h5 class="fw-bold py-3 mb-4">
                        Footer <span class="text-muted fw-light"><small> Optional</small></span>
                    </h5>
                    Add a small line of text at the bottom of your message template. If you add the
                    unsubscribe button for marketing communications, the footer will be displayed here by default.

                    <div class="p-3 mb-2 bg-light text-dark $gray-500">
                        <div class="mb-3">
                            <input id="defaultInput" class="form-control" type="text"
                                placeholder="Saisie le texte dans French" />
                        </div>
                        <br>
                    </div>
                    <h5 class="fw-bold py-3 mb-4">
                        Boutons <span class="text-muted fw-light"><small> Optionnal</small></span>
                    </h5>
                    Create buttons that allow customers to respond to your message or take an action. <br>
                    <div class="mb-3">
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                            <option selected>Ajouter une bouton</option>
                            <option value="1">Appel</option>
                            <option value="2">Message</option>
                            <option value="3">Link</option>
                        </select>
                    </div>
                    <i class="bx bx-bulb"></i>If you add more than 3 buttons, they will appear in a list.
                </div>

            </div>

        </div>

        <div class="col">

            <div class="card mb-3">
                <h5 class="card-header">Message preview </h5>
                <table class="table table-borderless">
                    <hr class="dropdown-divider"><br>
                    <tbody>
                        <tr>
                            <td class="py-3">
                                <h1 class="mb-0">Whatsapp <small class="text-muted">au client</small></h1>
                            </td>
                        </tr>

                        <tr>


                            <div class="form-group has-warning" id="form-message-apercu">

                            </div>

                        </tr>

                    </tbody>
                </table>
            </div>
        </div>


    </div>


    <script src="/assets/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script>
        $('#uploadVideoFile').on('change',
            function() {
                var fileInput = document.getElementById("uploadVideoFile");
                console.log('Trying to upload the video file: %O', fileInput);
                if ('files' in fileInput) {
                    if (fileInput.files.length === 0) {
                        alert("Select a file to upload");
                    } else {
                        var $source = $('#videoSource');
                        $source[0].src = URL.createObjectURL(this.files[0]);
                        $source.parent()[0].load();
                        console.log('Started uploading file "' + this.files[0].name + '"');

                        $("#videoSourceWrapper").show();
                    }
                } else {
                    console.log('No found "files" property');
                }
            }
        );
       /*  $('#upload_video_form').submit(function(e) {
            var fileInput = document.getElementById("uploadVideoFile");
            var files = $("#uploadVideoFile")[0].files;

            if ('files' in fileInput) {
                if (fileInput.files.length === 0) {
                    alert("Select a file to upload");
                } else {
                    var loaded = 0;
                    var chunkSize = 500000;
                    var total = fileInput.files[0].size;
                    console.log('Started uploading fille Size"' + total + '"');

                    var reader = new FileReader();
                    var slice = fileInput.files[0].slice(0, chunkSize);

                    var formData = new FormData(document.getElementById("upload_video_form"));
                    var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
                    //var files = $('#formFileImage')[0].files;
                    formData.append('_token', CSRF_TOKEN);
                    formData.append('formFileVideo', slice);
                    formData.append('extension', fileInput.files[0].name.split('.').pop());
                    // Reading a chunk to invoke the 'onload' event
                    reader.readAsBinaryString(slice);
                    console.log('Started uploading file level 2"' + fileInput.files[0].name + '"');
                    $.ajax({
                            url: "{{ route('pages-campagne-template-three-post') }}",
                            type: "POST",
                            data: formData,
                            processData: false,
                            contentType: false,
                            dataType: 'json',
                            xhr: function(){
//upload Progress
var xhr = $.ajaxSettings.xhr();
if (xhr.upload) {
xhr.upload.addEventListener('progress', function(event) {
var percent = 0;
var position = event.loaded || event.position;
var total = event.total;
if (event.lengthComputable)
{
percent = Math.ceil(position / total * 100);
}
//update progressbar
$("#uploadVideoProgressBar").css("width", + percent +"%");
$(".status").text(percent +"%");
}, true);
}
return xhr;
},
                            success: (data) => {
                                console.log(data);
                                alert('Success');
                            },
                            error: (function(errorData) {
                                console.log(errorData);
                                alert("Video Upload Failed");
                            })
                        }); */
                   /*  reader.onload = function(e) {
                        loaded += chunkSize;
                        var percentLoaded = Math.min((loaded / total) * 100, 100);
                        console.log('Uploaded ' + Math.floor(percentLoaded) + '% of file "' + fileInput.files[0]
                            .name + '"');
                        $('#uploadVideoProgressBar').width(percentLoaded + "%");

                        //Read the next chunk and call 'onload' event again
                        if (loaded <= total) {
                            slice = fileInput.files[0].slice(loaded, loaded + chunkSize);
                            reader.readAsBinaryString(slice);
                        } else {
                            loaded = total;
                            console.log('File "' + fileInput.files[0].name + '" uploaded successfully!');
                        }
                        //Send the sliced chunk to the REST API

                    } */
          /*       }
            } else {
                console.log('No found "files" property');
            }

        }); */
    </script>
    <script>
        $(document).ready(function(e) {
            $('#formFileImage').change(function() {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#image_preview_container').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });
            $('#upload_image_form').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(document.getElementById("upload_image_form"));
                var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
                var files = $('#formFileImage')[0].files;
                formData.append('_token', CSRF_TOKEN);
                formData.append('formFileImage', files[0]);

                $.ajax({
                    type: 'POST',
                    url: "{{ route('pages-campagne-template-three-post') }}",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    success: (data) => {
                        alert('Success');
                    },
                    error: function(data) {
                        console.log(data);
                    }
                });
            });
        });
    </script>
    <script>
        $("#textTitleIdCard").hide();
        $("#imageTitleIdCard").hide();
        $("#videoTitleIdCard").hide();
        $(document).ready(function() {
            $("#typeTitleId").change(function() {
                var selected_option = $('#typeTitleId').val();
                //alert(selected_option);
                if (selected_option === 'imageItem') {
                    $('#imageTitleIdCard').show();
                    $("#textTitleIdCard").hide();
                    $("#videoTitleIdCard").hide();
                } else if (selected_option === 'videoItem') {
                    $('#videoTitleIdCard').show();
                    $("#textTitleIdCard").hide();
                    $("#imageTitleIdCard").hide();
                } else if (selected_option === 'textItem') {
                    $('#textTitleIdCard').show();
                    $("#imageTitleIdCard").hide();
                    $("#videoTitleIdCard").hide();
                } else {
                    $("#textTitleIdCard").hide();
                    $("#imageTitleIdCard").hide();
                    $("#videoTitleIdCard").hide();
                }
            });
        });

        $(document).ready(function() {
            $("#buttonPreview").click(function() {
                var content = document.getElementById('message').innerHTML;
                document.getElementById('form-message-apercu').innerHTML = getContents();
            });
        });


        var toolbarOptions = [
            ['bold', 'italic', 'underline', 'strike'], // toggled buttons
            [{
                'header': 1
            }, {
                'header': 2
            }], // custom button values
            [{
                'list': 'ordered'
            }, {
                'list': 'bullet'
            }],
            [{
                'script': 'sub'
            }, {
                'script': 'super'
            }], // superscript/subscript

        ];

        var quill = new Quill('#message', {
            modules: {
                toolbar: toolbarOptions
            },
            theme: 'snow'
        })

        function getContents() {
            var delta = quill.getContents();

            return quillGetHTML(delta);
        }

        function quillGetHTML(inputDelta) {
            var tempCont = document.createElement("div");
            (new Quill(tempCont)).setContents(inputDelta);
            return tempCont.getElementsByClassName("ql-editor")[0].innerHTML;
        }

        function insertCanned(canned_html) {
            quill.clipboard.dangerouslyPasteHTML(canned_html);
        }

        //EmojiArea.DEFAULTS.assetPath = './assets/images';
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


@endsection
