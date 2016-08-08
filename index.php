<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0"/>

    <!-- JQUERY -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- FONTS -->
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto"/>
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>

    <!-- CEMATERIAL -->
    <script type="text/javascript" src="js/cematerial.js"></script>
    <link type="text/css" rel="stylesheet" href="css/cematerial.css"/>

    <style>
        body {
            background-color: #eee;
        }

        #main {
            background-color: #fff;
            margin: 0 auto;
            max-width: 1200px;
        }
    </style>
</head>

<body>
<div id="main">

    <section class="container">
        <h1>Buttons</h1>

        <a class="btn bg-green-6 waves btn-xs">
            Button
        </a>
        <a class="btn bg-green-6 waves btn-sm">
            Button
        </a>
        <a class="btn bg-green-6 waves">
            Button
        </a>
        <a class="btn bg-green-6 waves btn-lg">
            Button
        </a>
        <a class="btn bg-green-6 waves btn-xl">
            Button
        </a>

        <a class="btn bg-green-6 waves">
            <i class="md-icon">add</i>
        </a>
        <a class="btn bg-green-6 waves">
            <i class="md-icon">add</i>
            Add
        </a>
        <a class="btn bg-green-6 waves btn-disabled">
            Disabled
        </a>

    </section>

    <div class="line-horizontal"></div>

    <section class="container">
        <h1>Text Fields</h1>

        <div class="grid">
            <div class="xs-col-4 container">
                <label class="label focus-blue-5">
                    <span class="label-text">Input color on focus</span>
                    <input class="input" type="text"/>
                </label>
            </div>
            <div class="xs-col-4 container">
                <label class="label text-blue-5">
                    <span class="label-text">Input colored</span>
                    <input class="input input-blue-5" type="text"/>
                </label>
            </div>
            <div class="xs-col-4 container">
                <label class="label label-float focus-blue-5">
                    <span class="label-text">Input floating label</span>
                    <input class="input" type="text"/>
                </label>
            </div>
        </div>

    </section>

    <div class="line-horizontal"></div>

    <section class="container">
        <h1>Cards / Colors</h1>

        <div class="grid">
            <div class="xs-col-12 sm-col-6 md-col-4 lg-col-3 xl-col-3 container-sm">
                <div class="card">
                    <div class="card-img xs-box-75 md-box-50 xs-bg-cover" style="background-image: url('http://www.slidesjs.com/img/example-slide-350-1.jpg')">
                        <!--<img src="http://www.orangeandgrey.org.uk/sitecontent/uploads/2015/01/Image-Here6.png" alt=""/>-->
                    </div>
                    <div class="card-header bg-grey-6 relative">
                        <h3 class="card-title">
                            Header
                        </h3>
                        <button class="btn btn-float waves right top bg-grey-8" type="button">
                            <i class="md-icon">add</i>
                        </button>
                    </div>
                    <div class="card-body bg-grey-7">
                        Lorem ipsum dolor sit amet
                    </div>
                    <div class="card-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, dignissimos doloremque earum eius est fugiat id inventore itaque.
                    </div>
                    <div class="line-horizontal"></div>
                    <div class="card-footer">
                        <button class="btn waves waves-dark" type="button">
                            Button
                        </button>
                        <button class="btn waves bg-grey-8" type="button">
                            Button
                        </button>
                    </div>
                </div>
            </div>
            <div class="xs-col-12 sm-col-6 md-col-4 lg-col-3 xl-col-3 container-sm">
                <div class="card">
                    <div class="card-img xs-box-75 md-box-50 xs-bg-cover" style="background-image: url('http://www.slidesjs.com/img/example-slide-350-1.jpg')">
                        <!--<img src="http://www.orangeandgrey.org.uk/sitecontent/uploads/2015/01/Image-Here6.png" alt=""/>-->
                    </div>
                    <div class="card-header bg-red-6 relative">
                        <h3 class="card-title">
                            Header
                        </h3>
                        <button class="btn btn-float waves right top bg-red-8" type="button">
                            <i class="md-icon">add</i>
                        </button>
                    </div>
                    <div class="card-body bg-red-7">
                        Lorem ipsum dolor sit amet
                    </div>
                    <div class="card-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, dignissimos doloremque earum eius est fugiat id inventore itaque.
                    </div>
                    <div class="line-horizontal"></div>
                    <div class="card-footer">
                        <button class="btn waves waves-dark" type="button">
                            Button
                        </button>
                        <button class="btn waves bg-red-8" type="button">
                            Button
                        </button>
                    </div>
                </div>
            </div>
            <div class="xs-col-12 sm-col-6 md-col-4 lg-col-3 xl-col-3 container-sm">
                <div class="card">
                    <div class="card-img xs-box-75 md-box-50 xs-bg-cover" style="background-image: url('http://www.slidesjs.com/img/example-slide-350-1.jpg')">
                        <!--<img src="http://www.orangeandgrey.org.uk/sitecontent/uploads/2015/01/Image-Here6.png" alt=""/>-->
                    </div>
                    <div class="card-header bg-green-6 relative">
                        <h3 class="card-title">
                            Header
                        </h3>
                        <button class="btn btn-float waves right top bg-green-8" type="button">
                            <i class="md-icon">add</i>
                        </button>
                    </div>
                    <div class="card-body bg-green-7">
                        Lorem ipsum dolor sit amet
                    </div>
                    <div class="card-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, dignissimos doloremque earum eius est fugiat id inventore itaque.
                    </div>
                    <div class="line-horizontal"></div>
                    <div class="card-footer">
                        <button class="btn waves waves-dark" type="button">
                            Button
                        </button>
                        <button class="btn waves bg-green-8" type="button">
                            Button
                        </button>
                    </div>
                </div>
            </div>
            <div class="xs-col-12 sm-col-6 md-col-4 lg-col-3 xl-col-3 container-sm">
                <div class="card">
                    <div class="card-img xs-box-75 md-box-50 xs-bg-cover" style="background-image: url('http://www.slidesjs.com/img/example-slide-350-1.jpg')">
                        <!--<img src="http://www.orangeandgrey.org.uk/sitecontent/uploads/2015/01/Image-Here6.png" alt=""/>-->
                    </div>
                    <div class="card-header bg-blue-6 relative">
                        <h3 class="card-title">
                            Header
                        </h3>
                        <button class="btn btn-float waves right top bg-blue-8" type="button">
                            <i class="md-icon">add</i>
                        </button>
                    </div>
                    <div class="card-body bg-blue-7">
                        Lorem ipsum dolor sit amet
                    </div>
                    <div class="card-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, dignissimos doloremque earum eius est fugiat id inventore itaque.
                    </div>
                    <div class="line-horizontal"></div>
                    <div class="card-footer">
                        <button class="btn waves waves-dark" type="button">
                            Button
                        </button>
                        <button class="btn waves bg-blue-8" type="button">
                            Button
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="line-horizontal"></div>

    <section class="container">
        <h1>Menus</h1>

        <div class="xs-text-center">

            <div class="menu-block">
                <div class="btn bg-pink-5" data-toggle="menu" data-target=".menu00">
                    Menu
                </div>
                <ul class="menu00 menu menu-arrow xs-menu-down sm-menu-down md-menu-down lg-menu-down xl-menu-down ">
                    <li>
                        <a>
                            <i class="md-icon">account_circle</i>
                            Menu Padrao
                        </a>
                        <ul class="menu">
                            <li>
                                <a>
                                    Teste Filho
                                </a>
                            </li>
                            <li>
                                <a>
                                    Teste Filho
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a>
                            <i class="md-icon">account_circle</i>
                            Menu para Esquerda
                        </a>
                        <ul class="menu menu-left">
                            <li>
                                <a>
                                    Teste Filho
                                </a>
                            </li>
                            <li>
                                <a>
                                    Teste Filho
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a>
                            <i class="md-icon">account_circle</i>
                            Menu para Direita
                        </a>
                        <ul class="menu menu-right">
                            <li>
                                <a>
                                    Teste Filho
                                </a>
                            </li>
                            <li>
                                <a>
                                    Teste Filho
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="menu-block">
                <div class="btn bg-pink-5" data-toggle="menu" data-target=".menu01">
                    Menu menu-left
                </div>
                <ul class="menu01 menu menu-arrow xs-menu-down sm-menu-down md-menu-down lg-menu-down xl-menu-down menu-left">
                    <li>
                        <a>
                            <i class="md-icon">account_circle</i>
                            Menu Padrao
                        </a>
                        <ul class="menu">
                            <li>
                                <a>
                                    Teste Filho
                                </a>
                            </li>
                            <li>
                                <a>
                                    Teste Filho
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a>
                            <i class="md-icon">account_circle</i>
                            Menu para Esquerda
                        </a>
                        <ul class="menu menu-left">
                            <li>
                                <a>
                                    Teste Filho
                                </a>
                            </li>
                            <li>
                                <a>
                                    Teste Filho
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a>
                            <i class="md-icon">account_circle</i>
                            Menu para Direita
                        </a>
                        <ul class="menu menu-right">
                            <li>
                                <a>
                                    Teste Filho
                                </a>
                            </li>
                            <li>
                                <a>
                                    Teste Filho
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="menu-block">
                <div class="btn bg-pink-5" data-toggle="menu" data-target=".menu02">
                    Menu menu-right
                </div>
                <ul class="menu02 menu menu-arrow xs-menu-down sm-menu-down md-menu-down lg-menu-down xl-menu-down menu-right">
                    <li>
                        <a>
                            <i class="md-icon">account_circle</i>
                            Menu Padrao
                        </a>
                        <ul class="menu">
                            <li>
                                <a>
                                    Teste Filho
                                </a>
                            </li>
                            <li>
                                <a>
                                    Teste Filho
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a>
                            <i class="md-icon">account_circle</i>
                            Menu para Esquerda
                        </a>
                        <ul class="menu menu-left">
                            <li>
                                <a>
                                    Teste Filho
                                </a>
                            </li>
                            <li>
                                <a>
                                    Teste Filho
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a>
                            <i class="md-icon">account_circle</i>
                            Menu para Direita
                        </a>
                        <ul class="menu menu-right">
                            <li>
                                <a>
                                    Teste Filho
                                </a>
                            </li>
                            <li>
                                <a>
                                    Teste Filho
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="menu-block">
                <div class="btn bg-pink-5" data-toggle="menu" data-target=".menu10">
                    Menu
                </div>
                <ul class="menu10 menu menu-arrow xs-menu-up sm-menu-up md-menu-up lg-menu-up xl-menu-up ">
                    <li>
                        <a>
                            <i class="md-icon">account_circle</i>
                            Menu Padrao
                        </a>
                        <ul class="menu">
                            <li>
                                <a>
                                    Teste Filho
                                </a>
                            </li>
                            <li>
                                <a>
                                    Teste Filho
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a>
                            <i class="md-icon">account_circle</i>
                            Menu para Esquerda
                        </a>
                        <ul class="menu menu-left">
                            <li>
                                <a>
                                    Teste Filho
                                </a>
                            </li>
                            <li>
                                <a>
                                    Teste Filho
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a>
                            <i class="md-icon">account_circle</i>
                            Menu para Direita
                        </a>
                        <ul class="menu menu-right">
                            <li>
                                <a>
                                    Teste Filho
                                </a>
                            </li>
                            <li>
                                <a>
                                    Teste Filho
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="menu-block">
                <div class="btn bg-pink-5" data-toggle="menu" data-target=".menu11">
                    Menu menu-left
                </div>
                <ul class="menu11 menu menu-arrow xs-menu-up sm-menu-up md-menu-up lg-menu-up xl-menu-up menu-left">
                    <li>
                        <a>
                            <i class="md-icon">account_circle</i>
                            Menu Padrao
                        </a>
                        <ul class="menu">
                            <li>
                                <a>
                                    Teste Filho
                                </a>
                            </li>
                            <li>
                                <a>
                                    Teste Filho
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a>
                            <i class="md-icon">account_circle</i>
                            Menu para Esquerda
                        </a>
                        <ul class="menu menu-left">
                            <li>
                                <a>
                                    Teste Filho
                                </a>
                            </li>
                            <li>
                                <a>
                                    Teste Filho
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a>
                            <i class="md-icon">account_circle</i>
                            Menu para Direita
                        </a>
                        <ul class="menu menu-right">
                            <li>
                                <a>
                                    Teste Filho
                                </a>
                            </li>
                            <li>
                                <a>
                                    Teste Filho
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="menu-block">
                <div class="btn bg-pink-5" data-toggle="menu" data-target=".menu12">
                    Menu menu-right
                </div>
                <ul class="menu12 menu menu-arrow xs-menu-up sm-menu-up md-menu-up lg-menu-up xl-menu-up menu-right">
                    <li>
                        <a>
                            <i class="md-icon">account_circle</i>
                            Menu Padrao
                        </a>
                        <ul class="menu">
                            <li>
                                <a>
                                    Teste Filho
                                </a>
                            </li>
                            <li>
                                <a>
                                    Teste Filho
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a>
                            <i class="md-icon">account_circle</i>
                            Menu para Esquerda
                        </a>
                        <ul class="menu menu-left">
                            <li>
                                <a>
                                    Teste Filho
                                </a>
                            </li>
                            <li>
                                <a>
                                    Teste Filho
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a>
                            <i class="md-icon">account_circle</i>
                            Menu para Direita
                        </a>
                        <ul class="menu menu-right">
                            <li>
                                <a>
                                    Teste Filho
                                </a>
                            </li>
                            <li>
                                <a>
                                    Teste Filho
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
    </section>

    <div class="line-horizontal"></div>

    <section class="container">
        <h1>Modal Dialog</h1>

        <div>
            <a class="btn waves bg-blue-5" data-toggle="dialog" data-target="#myDialog">
                Open Dialog
            </a>
            <a class="btn waves bg-blue-5" data-toggle="dialog" data-target="#myDialog2">
                Open Second Dialog
            </a>
            <div class="dialog dialog-dark dialog-middle" id="myDialog">
                <div class="dialog-content xs-col-12 sm-col-8 md-col-6 lg-col-4 xl-col-2">
                    <div class="dialog-header">
                        <div class="grid grid-justify grid-nowrap">
                            <h1 class="dialog-title">
                                My first dialog
                            </h1>
                            <a class="btn waves waves-dark btn-sm" data-toggle="dialog">
                                <i class="md-icon">close</i>
                            </a>
                        </div>
                    </div>
                    <div class="dialog-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque molestias nisi obcaecati officia voluptatum! Blanditiis dolores facere ipsam magni saepe sit! Corporis debitis dicta earum expedita labore placeat quisquam vel!</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque molestias nisi obcaecati officia voluptatum! Blanditiis dolores facere ipsam magni saepe sit! Corporis debitis dicta earum expedita labore placeat quisquam vel!</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque molestias nisi obcaecati officia voluptatum! Blanditiis dolores facere ipsam magni saepe sit! Corporis debitis dicta earum expedita labore placeat quisquam vel!</p>
                        <p>
                            <a class="btn waves bg-blue-5" data-toggle="dialog" data-target="#myDialog2">
                                Open Second Dialog
                            </a>
                        </p>
                    </div>
                    <div class="dialog-footer">
                        <a class="btn waves waves-dark" data-toggle="dialog">Cancel</a>
                        <a class="btn waves bg-green-6" data-toggle="dialog">Confirm</a>
                    </div>
                </div>
            </div>
            <div class="dialog dialog-dark dialog-middle" id="myDialog2">
                <div class="dialog-content xs-col-12 sm-col-8 md-col-6 lg-col-4 xl-col-2">
                    <div class="dialog-header">
                        <div class="grid grid-justify grid-nowrap">
                            <h1 class="dialog-title">
                                My second dialog
                            </h1>
                            <a class="btn waves waves-dark btn-sm" data-toggle="dialog">
                                <i class="md-icon">close</i>
                            </a>
                        </div>
                    </div>
                    <div class="dialog-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque molestias nisi obcaecati officia voluptatum! Blanditiis dolores facere ipsam magni saepe sit! Corporis debitis dicta earum expedita labore placeat quisquam vel!</p>
                    </div>
                    <div class="dialog-footer">
                        <a class="btn waves waves-dark" data-toggle="dialog">Cancel</a>
                        <a class="btn waves bg-green-6" data-toggle="dialog">Confirm</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="line-horizontal"></div>

    <section class="container">
        <h1>Chips</h1>

        <div>
            <div class="chips">
                Basic chips
            </div>
            <div class="chips">
                <div class="chips-img" style="background-image: url('http://www.slidesjs.com/img/example-slide-350-1.jpg')"></div>
                Image chips
            </div>
            <div class="chips">
                <div class="chips-img" style="background-image: url('http://www.slidesjs.com/img/example-slide-350-1.jpg')"></div>
                Icon chips
                <i class="md-icon">close</i>
            </div>
        </div>
    </section>

    <div class="line-horizontal"></div>

    <section class="container">
        <h1>Tables</h1>

        <div>
            <div class="card">
                <div class="card-header">
                    <div class="grid grid-middle grid-nowrap">
                        <h3 class="card-title">
                            Nutrition
                        </h3>
                        <a class="btn waves waves-dark col-right">
                            <i class="md-icon">filter_list</i>
                        </a>
                        <a class="btn waves waves-dark">
                            <i class="md-icon">more_vert</i>
                        </a>
                    </div>
                </div>
                <table class="table-card table-hover">
                    <thead>
                    <tr>
                        <th>
                            <input class="input" type="checkbox" data-toggle="table"/>
                        </th>
                        <th class="table-content">Dessert (100g serving)</th>
                        <th>Calories</th>
                        <th>Fat (g)</th>
                        <th>Carbs (g)</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <input class="input" type="checkbox"/>
                        </td>
                        <td>Frozen yogurt</td>
                        <td class="xs-text-right">159</td>
                        <td class="xs-text-right">6.0</td>
                        <td class="xs-text-right">24</td>
                    </tr>
                    <tr>
                        <td>
                            <input class="input" type="checkbox"/>
                        </td>
                        <td>Ice cream sandwich</td>
                        <td class="xs-text-right">237</td>
                        <td class="xs-text-right">9.0</td>
                        <td class="xs-text-right">37</td>
                    </tr>
                    <tr>
                        <td>
                            <input class="input" type="checkbox"/>
                        </td>
                        <td>Eclair</td>
                        <td class="xs-text-right">262</td>
                        <td class="xs-text-right">16.0</td>
                        <td class="xs-text-right">24</td>
                    </tr>
                    </tbody>
                </table>
                <div class="card-footer">
                    <div class="grid grid-middle">
                        <div class="col-right container-sm">
                            Rows per page:
                        </div>
                        <div class="container-sm">
                            3
                        </div>
                        <div class="container-sm">
                            1-3 of 30
                        </div>
                        <div class="container-sm">
                            <a class="btn waves waves-dark">
                                <i class="md-icon">chevron_left</i>
                            </a>
                            <a class="btn waves waves-dark">
                                <i class="md-icon">chevron_right</i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

</body>

</html>