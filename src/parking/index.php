<?php
    session_start();

    require_once( "../php/controller/UserController.php" );
    require_once( "../php/model/User.php" );

    $user_id = (int) $_SESSION[ "user_id" ];
    if ( ! isset( $user_id ) ) {
        header( 'Location: ../logout' );
        exit();
    }
    $user = $user_controller->find_by_id( $user_id );
    if ( ! isset( $user ) ) {
        header( 'Location: ../logout' );
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            $page_name = "Flights";
            require( "../includes/head_template.php" );
        ?>

        <link rel="stylesheet" href="../material.css" />
        <script type="text/javascript" src="parking.js"></script>
        <link rel="stylesheet" href="../main.css" />
        <link rel="stylesheet" href="parking.css" />
    </head>
    <body id="parking">
        <?php require( "../includes/main_layout_top.php" ) ?>
        <main class="mdl-layout__content mdl-grid mdl-color--grey-100">
            <div id="date-picker-parent" class="mdl-cell mdl-cell--12-col">
                <p> Select the date you want to reserve parking for to check availability: (mm/dd/yy)
                    <input name="month" id="month" onkeypress="return isNumberKey(event)" type="text" size="2" /> <input
                            name="day"
                            onkeypress="return isNumberKey(event)"
                            type="text"
                            size="2" /> <input name="year"
                                               onkeypress="return isNumberKey(event)"
                                               type="text"
                                               size="2" /> <input type="submit"
                                                                  value="Submit"
                                                                  onclick="pricepoint(document.getElementById('month').value)"
                                                                  name="submit" /></p>
                <p id="demo"> Price Per Spot: $ </p>
                <p></p>
                <input type="submit" value="Reservespot" onclick="printArray()" name="submit2" />
                <br>
                <br>
                <p id="demo2"></p>
                <p id="demo3"></p>
            </div>
            <table class="mdl-cell mdl-cell--4-col">
                <tr>
                    <th class="spot5"></th>
                    <th class="spot2">
                        <button onclick="myFunction9()" id="button9">Reserve Spot 9</button>
                    </th>
                    <th class="spot4">
                        <button onclick="myFunction10()" id="button10">Reserve Spot 10</button>
                    </th>
                    <th class="spot4">
                        <button onclick="myFunction11()" id="button11">Reserve Spot 11</button>
                    </th>
                    <th class="spot4">
                        <button onclick="myFunction12()" id="button12">Reserve Spot 12</button>
                    </th>
                    <th class="spot5"></th>
                    <th class="spot5"></th>
                    <th class="spot2">
                        <button onclick="myFunction25()" id="button25">Reserve Spot 25</button>
                    </th>
                    <th class="spot4">
                        <button onclick="myFunction26()" id="button26">Reserve Spot 26</button>
                    </th>
                    <th class="spot4">
                        <button onclick="myFunction27()" id="button27">Reserve Spot 27</button>
                    </th>
                    <th class="spot4">
                        <button onclick="myFunction28()" id="button28">Reserve Spot 28</button>
                    </th>
                    <th class="spot5"></th>
                </tr>
                <tr>
                    <td class="spot1">
                        <button onclick="myFunction8()" id="button8">Reserve Spot 8</button>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="spot6">
                        <button onclick="myFunction13()" id="button13">Reserve Spot 13</button>
                    </td>
                    <td class="spot1">
                        <button onclick="myFunction24()" id="button24">Reserve Spot 24</button>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="spot7">
                        <button onclick="myFunction29()" id="button29">Reserve Spot 29</button>
                    </td>
                </tr>
                <tr>
                    <td class="spot1">
                        <button onclick="myFunction7()" id="button7">Reserve Spot 7</button>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="spot6">
                        <button onclick="myFunction14()" id="button14">Reserve Spot 14</button>
                    </td>
                    <td class="spot1">
                        <button onclick="myFunction23()" id="button23">Reserve Spot 23</button>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="spot7">
                        <button onclick="myFunction30()" id="button30">Reserve Spot 30</button>
                    </td>
                </tr>
                <tr>
                    <td class="spot1">
                        <button onclick="myFunction6()" id="button6">Reserve Spot 6</button>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="spot6">
                        <button onclick="myFunction15()" id="button15">Reserve Spot 15</button>
                    </td>
                    <td class="spot1">
                        <button onclick="myFunction22()" id="button22">Reserve Spot 22</button>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="spot7">
                        <button onclick="myFunction31()" id="button31">Reserve Spot 31</button>
                    </td>
                </tr>
                <tr>
                    <td class="spot1">
                        <button onclick="myFunction5()" id="button5">Reserve Spot 5</button>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="spot6">
                        <button onclick="myFunction16()" id="button16">Reserve Spot 16</button>
                    </td>
                    <td class="spot1">
                        <button onclick="myFunction21()" id="button21">Reserve Spot 21</button>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="spot7">
                        <button onclick="myFunction32()" id="button32">Reserve Spot 32</button>
                    </td>
                </tr>
                <tr>
                    <td class="spot1">
                        <button onclick="myFunction4()" id="button4">Reserve Spot 4</button>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="spot6">
                        <button onclick="myFunction17()" id="button17">Reserve Spot 17</button>
                    </td>
                    <td class="spot1">
                        <button onclick="myFunction20()" id="button20">Reserve Spot 20</button>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="spot7">
                        <button onclick="myFunction33()" id="button33">Reserve Spot 33</button>
                    </td>
                </tr>
                <tr>
                    <td class="spot1">
                        <button onclick="myFunction3()" id="button3">Reserve Spot 3</button>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="spot6">
                        <button onclick="myFunction18()" id="button18">Reserve Spot 18</button>
                    </td>
                    <td class="spot1">
                        <button onclick="myFunction19()" id="button19">Reserve Spot 19</button>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="spot7">
                        <button onclick="myFunction34()" id="button34">Reserve Spot 34</button>
                    </td>
                </tr>
                <tr>
                    <td class="spot1">
                        <button onclick="myFunction2()" id="button2">Reserve Spot 2</button>
                    </td>
                    <td></td>
                    <td></td>
                    <td>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                    <td></td>
                    <td></td>
                    <td class="spot7">
                        <button onclick="myFunction35()" id="button35">Reserve Spot 35</button>
                    </td>
                </tr>
                <tr>
                    <td class="spot1">
                        <button onclick="myFunction1()" id="button1">Reserve Spot 1</button>
                    </td>
                    <td></td>
                    <td></td>
                    <td class="lot" colspan="6">Parking Lot A: Daily Parking</td>
                    <td></td>
                    <td></td>
                    <td class="spot7">
                        <button onclick="myFunction36()" id="button36">Reserve Spot 36</button>
                    </td>
                </tr>
            </table>
        </main>
        <?php require( "../includes/main_layout_bottom.php" ) ?>
    </body>
</html>