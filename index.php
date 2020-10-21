<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link
            href="https://fonts.googleapis.com/icon?family=Material+Icons"
            rel="stylesheet">
        <link
            type="text/css"
            rel="stylesheet"
            href="materialize/css/materialize.min.css"
            media="screen,projection"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Girls Power Community</title>
    </head>

    <!-- Body -->

    <body class="purple lighten-5">

        <!-- Menu -->

        <nav>
            <div class="nav-wrapper container">
                <a href="#" class="brand-logo">Girls Power</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li>
                        <a href="sass.html">Info</a>
                    </li>
                    <li>
                        <a href="badges.html">Know more</a>
                    </li>
                    <li>
                        <a href="collapsible.html">Sign in</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- 1st container -->

        <div class="progress purple lighten">
            <div class="indeterminate pink"></div>
        </div>
        <div class="container center">
            <h2>Welcome to our website !</h2>
        </div>
        <div class="container">
            <div class="row center flow-text">
                <div class="col s6">Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                    ever since the 1500s, when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book. It has survived not only five
                    centuries, but also the leap into electronic typesetting, remaining essentially
                    unchanged. It was popularised in the 1960s with the release of Letraset sheets
                    containing Lorem Ipsum passages, and more recently with desktop publishing
                    software like Aldus PageMaker including versions of Lorem Ipsum.</div>
                <div class="col s6">It is a long established fact that a reader will be
                    distracted by the readable content of a page when looking at its layout. The
                    point of using Lorem Ipsum is that it has a more-or-less normal distribution of
                    letters, as opposed to using 'Content here, content here', making it look like
                    readable English. Many desktop publishing packages and web page editors now use
                    Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will
                    uncover many web sites still in their infancy. Various versions have evolved
                    over the years, sometimes by accident, sometimes on purpose (injected humour and
                    the like).</div>
            </div>
        </div>

        <!-- 2nd container CARDS -->

        <div class="container">
            <div class="row">

                <div class="col s4">

                    <div class="card pink darken-1">
                        <div class="card-content white-text">
                            <span class="card-title">Card Title</span>
                            <p>I am a very simple card. I am good at containing small bits of information. I
                                am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">This is a link</a>
                            <a href="#">This is a link</a>
                        </div>
                    </div>

                </div>
                <div class="col s4">
                    <div class="card pink darken-1">
                        <div class="card-content white-text">
                            <span class="card-title">Card Title</span>
                            <p>I am a very simple card. I am good at containing small bits of information. I
                                am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">This is a link</a>
                            <a href="#">This is a link</a>
                        </div>
                    </div>

                </div>
                <div class="col s4">

                    <div class="card pink darken-1">
                        <div class="card-content white-text">
                            <span class="card-title">Card Title</span>
                            <p>I am a very simple card. I am good at containing small bits of information. I
                                am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">This is a link</a>
                            <a href="#">This is a link</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!--3rd container form -->/

        <div class="container center">
            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                            <label for="first_name">First Name</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="last_name" type="text" class="validate">
                            <label for="last_name">Last Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input
                                disabled="disabled"
                                value="I am not editable"
                                id="disabled"
                                type="text"
                                class="validate">
                            <label for="disabled">Disabled</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" class="validate">
                            <label for="password">Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <button class="btn waves-effect waves-light pink" type="submit" name="action">Enviar
                        <i class="material-icons right">send</i>
                    </button>
                </form>
            </div>
        </div>

        <!--footer -->

        <footer class="page-footer ">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Footer Content</h5>
                        <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Links</h5>
                        <ul>
                            <li>
                                <a class="grey-text text-lighten-3" href="#!">Link 1</a>
                            </li>
                            <li>
                                <a class="grey-text text-lighten-3" href="#!">Link 2</a>
                            </li>
                            <li>
                                <a class="grey-text text-lighten-3" href="#!">Link 3</a>
                            </li>
                            <li>
                                <a class="grey-text text-lighten-3" href="#!">Link 4</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2014 Copyright Text
                    <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
                </div>
            </div>
        </footer>

        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    </body>
</html>