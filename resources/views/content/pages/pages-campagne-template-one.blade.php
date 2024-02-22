@extends('layouts/contentNavbarLayout')

@section('title', 'Campagne statistic - Pages')
@section('page-script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

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

        .nav {

            border: 10px;
        }
    </style>

    <!-- Basic with Icons -->
    <div class="col-xxl">
     
      <form action="{{ route('pages-campagne-template-one-post') }}" method="post"
      enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
            <h4>Nouveau modele de message</h4>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item">
                        <a class="dropdown-item" href="#"><i class="bx bx-question-mark"></i>Page d'aide</a>
                    </li>

                    <li>
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a class="dropdown-item"
                                href="{{ route('pages-campagne-template') }}">Annuler</a></button>
                    </li>
                   
                </ul>
            </div>
        </nav><br>

        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Categories</h5>
            </div>
            <div class="form-text">
                <h5>Choisissez la categorie qui decrit au mieux votre modele de message.<a href="#">En savoir plus sur
                        les categories</a></h5>
            </div>

            <div class="p-3 mb-2 bg-light text-dark ">
                


                    <div class="nav-align-top mb-4">
                        <ul class="nav nav-tabs nav-fill" role="tablist">
                            <li class="nav-item">
                                <button type="button" id="choix1" class="nav-link active" role="tab"
                                    data-bs-toggle="tab" data-bs-target="#navs-justified-home"
                                    aria-controls="navs-justified-home" aria-selected="false" onclick="changement()"><i
                                        class="bx bxs-briefcase-alt-2"></i>Marketing</button>
                            </li>
                            <li class="nav-item">
                                <button type="button" id="choix2" class="nav-link" role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-justified-profile" aria-controls="navs-justified-profile"
                                    aria-selected="false" onclick="changement()"><i class="bx bxs-bell"></i>
                                    Services</button>
                            </li>
                            <li class="nav-item">
                                <button type="button" id="choix3" class="nav-link" role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-justified-messages" aria-controls="navs-justified-messages"
                                    aria-selected="false" onclick="changement()"><i
                                        class="bx bxs-key"></i>Authentification</button>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="navs-justified-home" role="tabpanel">

                                <p>
                                    Les promotions ou informations à propos de votre entreprise , vos produits
                                    ou vos services, ou tout message qui n'est pas à caractère utilitaire ou lié à
                                    l'authentification
                                </p><br>

                                <p class="mb-0">
                                    <input class="form-check-input" type="radio" name="typeOffre"
                                        id="flexRadioDefault1" onclick="changement()"
                                        value="personnaliser">
                                    Personalisé
                                <p>
                                    Envoyés des offres promotionnelles, des annonces et plus encores pour augmenter la
                                    notoriété et les interactions.
                                </p>
                                </p>
                                <p class="mb-0">
                                    <input class="form-check-input" type="radio" name="typeOffre"
                                        id="flexRadioDefault2" onclick="changement()"
                                        value="product">
                                    Messages produit
                                <p>
                                    Envoyés des messages concernant tout votre catalogue ou certains produits.
                                </p>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="navs-justified-profile" role="tabpanel">
                                <p>
                                    Les messages à propos d'une transaction , d'un compte, d'une commande ou d'une demande
                                    client spécifique.
                                </p>

                            </div>
                            <div class="tab-pane fade" id="navs-justified-messages" role="tabpanel">

                                <p class="mb-0">
                                    Les mots de passe à usage unique que votre clientèle utilise pour authentifier une
                                    transaction ou
                                    connexion.
                                </p>
                            </div>
                        </div>
                    </div>
            </div>



            <div class="card-body">
                <div class="p-3 mb-2 bg-light text-dark rounded">

                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <div class="form-text">Donnez un nom à votre modèle de message</div>
                    <input type="text" class="form-control" id="exampleFormControlInput1"
                        placeholder="Entrez un nom à votre modele" onchange="changement()" name="nameTemplate" />
                </div>
              <div>
                <input type="text" id="categoryTemplate" value="Marketing" name="categoryTemplate" hidden />
              </div>
            </div>


            <div class="card-body">
                <div class="p-3 mb-2 bg-light text-dark rounded">
                    <label for="exampleFormControlInput1" class="form-label">Langue</label>
                    <div class="form-text">Choisissez les langues pour votre modele de message.vous pourrez les supprimer
                        ou les ajouter plus tard</div>
                    <select class="form-select" id="languages" name="languages">
                        <option>language</option>
                        <option value="af">Afrikaans</option>
                        <option value="sq">Albanian - shqip</option>

                        <option value="ar">Arabic - العربية</option>

                        <option value="az">Azerbaijani - azərbaycan dili</option>

                        <option value="bn">Bengali - বাংলা</option>

                        <option value="bg">Bulgarian - български</option>
                        <option value="ca">Catalan - català</option>


                        <option value="zh-HK">Chinese (Hong Kong) - 中文（香港）</option>
                        <option value="zh-CN">Chinese (Simplified) - 中文（简体）</option>
                        <option value="zh-TW">Chinese (Traditional) - 中文（繁體）</option>
                        <option value="co">Corsican</option>
                        <option value="hr">Croatian - hrvatski</option>
                        <option value="cs">Czech - čeština</option>
                        <option value="da">Danish - dansk</option>
                        <option value="nl">Dutch - Nederlands</option>

                        <option value="en-GB">English (United Kingdom)</option>
                        <option value="en-US">English (United States)</option>
                        <option value="eo">Esperanto - esperanto</option>
                        <option value="et">Estonian - eesti</option>

                        <option value="fil">Filipino</option>
                        <option value="fi">Finnish - suomi</option>
                        <option value="fr">French - français</option>

                        <option value="de">German - Deutsch</option>

                        <option value="el">Greek - Ελληνικά</option>

                        <option value="gu">Gujarati - ગુજરાતી</option>
                        <option value="ha">Hausa</option>

                        <option value="he">Hebrew - עברית</option>
                        <option value="hi">Hindi - हिन्दी</option>
                        <option value="hu">Hungarian - magyar</option>

                        <option value="id">Indonesian - Indonesia</option>

                        <option value="ga">Irish - Gaeilge</option>
                        <option value="it">Italian - italiano</option>

                        <option value="ja">Japanese - 日本語</option>
                        <option value="kn">Kannada - ಕನ್ನಡ</option>
                        <option value="kk">Kazakh - қазақ тілі</option>

                        <option value="ko">Korean - 한국어</option>

                        <option value="lo">Lao - ລາວ</option>
                        <option value="la">Latin</option>
                        <option value="lv">Latvian - latviešu</option>

                        <option value="lt">Lithuanian - lietuvių</option>
                        <option value="mk">Macedonian - македонски</option>
                        <option value="ms">Malay - Bahasa Melayu</option>
                        <option value="ml">Malayalam - മലയാളം</option>

                        <option value="mr">Marathi - मराठी</option>

                        <option value="nb">Norwegian Bokmål - norsk bokmål</option>

                        <option value="fa">Persian - فارسی</option>
                        <option value="pl">Polish - polski</option>

                        <option value="pt-BR">Portuguese (Brazil) - português (Brasil)</option>
                        <option value="pt-PT">Portuguese (Portugal) - português (Portugal)</option>
                        <option value="pa">Punjabi - ਪੰਜਾਬੀ</option>

                        <option value="ro">Romanian - română</option>

                        <option value="ru">Russian - русский</option>
                        <option value="gd">Scottish Gaelic</option>
                        <option value="sr">Serbian - српски</option>

                        <option value="sk">Slovak - slovenčina</option>
                        <option value="sl">Slovenian - slovenščina</option>

                        <option value="es">Spanish - español</option>
                        <option value="es-AR">Spanish (Argentina) - español (Argentina)</option>

                        <option value="es-MX">Spanish (Mexico) - español (México)</option>
                        <option value="es-ES">Spanish (Spain) - español (España)</option>

                        <option value="sw">Swahili - Kiswahili</option>
                        <option value="sv">Swedish - svenska</option>

                        <option value="ta">Tamil - தமிழ்</option>

                        <option value="te">Telugu - తెలుగు</option>
                        <option value="th">Thai - ไทย</option>


                        <option value="uk">Ukrainian - українська</option>
                        <option value="ur">Urdu - اردو</option>

                        <option value="uz">Uzbek - o‘zbek</option>
                        <option value="vi">Vietnamese - Tiếng Việt</option>

                        <option value="zu">Zulu - isiZulu</option>
                    </select>
                </div>
                <div>
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="submit"
                      disabled="disabled">Continuer</button>
              </div>
            </div>
            </form>
        </div>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
        <script>
            // In your Javascript (external .js resource or <script> tag)
            
            let inputElt = document.getElementById('exampleFormControlInput1');
            let btn = document.getElementById('submit');
            // on commence par desactiver le bouton quand le javascript se charge
            btn.disabled = true;

            // ajout d'une fonction appelee des qu'une touche est enfoncee

            function changement() {
                if (document.getElementById('choix1') && (document.getElementById('flexRadioDefault1').checked || document
                        .getElementById('flexRadioDefault2').checked) && (inputElt.value != "")) {
                    btn.disabled = false;
                    document.getElementById('categoryTemplate').value="Marketing";
                } else if (document.getElementById('choix2') && (inputElt.value != "")) {
                    btn.disabled = false;
                    document.getElementById('categoryTemplate').value="Service";
                } else if (document.getElementById('choix3') && (inputElt.value != "")) {
                    btn.disabled = false;
                    document.getElementById('categoryTemplate').value="Authentification";
                } else {
                    btn.disabled = true;
                }

            }

            /*function isCharSet() {
              // on verifie si le champ n'est pas vide alors on desactive le bouton sinon on l'active
              if (inputElt.value != "") {
                btn.disabled = false;
              }
              else {
                btn.disabled = true;
              }
            }*/
        </script>

    @endsection
