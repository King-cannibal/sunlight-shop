-<!DOCTYPE html>
<html>
    <head>
        <!-- * Ensures the character set is UTF-8 encoded. -->
        <meta charset="utf-8">
        <!-- * Helps with scaling on different devices. -->
        <meta name="viewport" content="width=device-width">
        <!-- * Link to the native CSS file. -->
        <link rel="stylesheet" href="stylesheet.css">
        <!-- * Webpage Title -->
        <title>Sunlight Goods</title>
    </head>
    <body>
        <div class="Frame">
            <p class="Title">Sunlight Goods</p>
            <p class="Subtitle">Size of background image might vary.</p>
            <div class="flex-container">
                <!-- Option 1 -->
                <div class="Option">
                    <img src="https://live.staticflickr.com/65535/51667588135_a0980a635a_t.jpg" width="100" height="100" alt="god gap">
                    <run>
                        <p>1 God Gap for 5 Skulls</p>
                        <!--- Don't use the same function twice : ) --->
                        <input type="button" value="Trade!" onClick="onClickA1(); onClickA();" /></button>
                        <script type="text/javascript">
                            var skulls = 0;
                            function onClickA1() {
                                skulls += 5;
                                document.getElementById("skulls").innerHTML = skulls;
                            };
                        </script>
                    </run>
                </div>
                <!-- Option 2 -->
                <div class="Option">
                    <img src="https://live.staticflickr.com/65535/51660509647_a939cfb2ee_t.jpg" width="100" height="100" alt="wither skull">
                    <run>
                        <p>5 Skulls for 1 God Gap</p>
                        <!--- Don't use the same function twice : ) --->
                        <input type="button" value="Trade!" onClick="onClickB1(); onClickB();" /></button>
                        <script type="text/javascript">
                            var god_gaps = 0;
                            function onClickB1() {
                                god_gaps += 1;
                                document.getElementById("god_gaps").innerHTML = god_gaps;
                            };
                        </script>
                    </run>
                </div>
                <!-- Option 3 -->
                <div class="Option">
                    <img src="https://live.staticflickr.com/65535/51665855625_7f9c31eefb_t.jpg" width="100" height="100" alt="end crystal">
                    <run>
                        <p>32 End Crystals for 3 Skulls</p>
                        <!--- Don't use the same function twice : ) --->
                        <input type="button" value="Trade!" onClick="onClickC1(); onClickC();" /></button>
                        <script type="text/javascript">
                            var skulls = 0;
                            function onClickC1() {
                                skulls += 3;
                                document.getElementById("skulls").innerHTML = skulls;
                            };
                        </script>
                    </run>
                </div>
                <!-- Option 4 -->
                <div class="Option">
                    <img src="https://live.staticflickr.com/65535/51664969486_c2ea8f7e22_t.jpg" width="100" height="100" alt="carrot shulker">
                    <run>
                        <p>Shulker of Carrots / Potatoes For 1 Skull
                            <font size=4px>
                            <br>(Your Choice)
                            </font>
                        </p>
                        <!--- Don't use the same function twice : ) --->
                        <input type="button" value="Trade!" onClick="onClickD1(); onClickD();" /></button>
                        <script type="text/javascript">
                            var skulls = 0;
                            function onClickD1() {
                                skulls += 1;
                                document.getElementById("skulls").innerHTML = skulls;
                            };
                        </script>
                    </run>
                </div>
                <!-- Option 5 -->
                <div class="Option">
                    <img src="https://live.staticflickr.com/65535/51660749067_b88bfb7d84_t.jpg" width="100" height="100" alt="starter kit">
                    <run>
                        <p>Starter Kit For 2 Skulls
                            <font size=4px>
                            <br>(Only Elytra & Pickaxe Are Enchanted)
                            </font>
                        </p>
                        <!--- Don't use the same function twice : ) --->
                        <input type="button" value="Trade!" onClick="onClickE1(); onClickE();" /></button>
                        <script type="text/javascript">
                            var skulls = 0;
                            function onClickE1() {
                                skulls += 2;
                                document.getElementById("skulls").innerHTML = skulls;
                            };
                        </script>
                    </run>
                </div>
                <!-- Option 6 -->
                <div class="Option">
                    <img src="https://live.staticflickr.com/65535/51665596969_4342fbf12b_t.jpg" width="100" height="100" alt="custom shulker">
                    <run>
                        <p>Shulker of Custom Enchanted Books For 1 Skull
                            <font size=4px>
                            <br>(Your Choice)
                            </font>
                        </p>
                        <!--- Don't use the same function twice : ) --->
                        <input type="button" value="Trade!" onClick="onClickF1(); onClickF();" /></button>
                        <script type="text/javascript">
                            var skulls = 0;
                            function onClickF1() {
                                skulls += 1;
                                document.getElementById("skulls").innerHTML = skulls;
                            };
                        </script>
                    </run>
                </div>
                <!-- Option 7 -->
                <div class="Option">
                    <img src="https://live.staticflickr.com/65535/51665005518_41d634107a_t.jpg" width="100" height="100" alt="starter kit">
                    <run>
                        <p>Redstone Kit For 2 Skull
                            <font size=4px>
                            <br>(Includes Slime & Honey)
                            </font>
                        </p>
                        <input type="button" value="Trade!" onClick="onClickG1(); onClickG();" /></button>
                        <script type="text/javascript">
                            var skulls = 0;
                            function onClickG1() {
                                skulls += 2;
                                document.getElementById("skulls").innerHTML = skulls;
                            };
                        </script>
                    </run>
                </div>
                <!-- Option 8-->
                <div class="Option">
                    <img src="https://live.staticflickr.com/65535/51665005518_41d634107a_t.jpg" width="100" height="100" alt="starter kit">
                    <run>
                        <p>PvP Kit For 1 Skull</p>
                        <input type="button" value="Trade!" onClick="onClickH1(); onClickH();" /></button>
                        <script type="text/javascript">
                            var skulls = 0;
                            function onClickH1() {
                                skulls += 1;
                                document.getElementById("skulls").innerHTML = skulls;
                            };
                        </script>
                    </run>
                </div>
                <!-- Option 9 -->
                <div class="Option">
                    <img src="https://live.staticflickr.com/65535/51664839576_5be2ea52d4_t.jpg" width="100" height="100" alt="carrot box">
                    <run>
                        <p>Shulker Of Food for 1 Skull
                            <font size=4px>
                            <br>(Your Choice; Default is Golden Carrots)
                            </font>
                        </p>
                        <input type="button" value="Trade!" onClick="onClickI1(); onClickI();" /></button>
                        <script type="text/javascript">
                            var skulls = 0;
                            function onClickI1() {
                                skulls += 1;
                                document.getElementById("skulls").innerHTML = skulls;
                            };
                        </script>
                    </run>
                </div>
                <!-- Option 10 -->
                <div class="Option">
                    <img src="https://live.staticflickr.com/65535/51667588135_a0980a635a_t.jpg" width="100" height="100" alt="wither skull">
                    <run>
                        <p>32 Gaps for 1 Skull</p>
                        <!--- Don't use the same function twice : ) --->
                        <input type="button" value="Trade!" onClick="onClickJ1(); onClickJ();" /></button>
                        <script type="text/javascript">
                            var skulls = 0;
                            function onClickJ1() {
                                skulls += 1;
                                document.getElementById("skulls").innerHTML = skulls;
                            };
                        </script>
                    </run>
                </div>
                <!-- Option 11 -->
                <div class="Option">
                    <img src="https://live.staticflickr.com/65535/51664969486_c2ea8f7e22_t.jpg" width="100" height="100" alt="wither skull">
                    <run>
                        <p>Shulker Of Sand for 1 Skull</p>
                        <!--- Don't use the same function twice : ) --->
                        <input type="button" value="Trade!" onClick="onClickK1(); onClickK();" /></button>
                        <script type="text/javascript">
                            var skulls = 0;
                            function onClickK1() {
                                skulls += 1;
                                document.getElementById("skulls").innerHTML = skulls;
                            };
                        </script>
                    </run>
                </div>
                <!-- Option 12 -->
                <div class="Option">
                    <img src="https://live.staticflickr.com/65535/51664969486_c2ea8f7e22_t.jpg" width="100" height="100" alt="wither skull">
                    <run>
                        <p>Shulker Of Glass For 1 Skull</p>
                        <!--- Don't use the same function twice : ) --->
                        <input type="button" value="Trade!" onClick="onClickL1(); onClickL();" /></button>
                        <script type="text/javascript">
                            var skulls = 0;
                            function onClickL1() {
                                skulls += 1;
                                document.getElementById("skulls").innerHTML = skulls;
                            };
                        </script>
                    </run>
                </div>
                <!-- Option 13 -->
                <div class="Option">
                    <img src="https://live.staticflickr.com/65535/51680098500_8b7374f9c8_t.jpg" width="100" height="100" alt="wither skull">
                    <run>
                        <p>Shulker Of Potions for 1 Skull
                            <font size=4px>
                            <br>(Your Choice; May Take Time)
                            </font>
                        </p>
                        <!--- Don't use the same function twice : ) --->
                        <input type="button" value="Trade!" onClick="onClickM1(); onClickM();" /></button>
                        <script type="text/javascript">
                            var skulls = 0;
                            function onClickM1() {
                                skulls += 1;
                                document.getElementById("skulls").innerHTML = skulls;
                            };
                        </script>
                    </run>
                </div>
                <!-- Option 14 -->
                <div class="Option">
                    <img src="https://live.staticflickr.com/65535/51679426651_bd1ed7d38b_t.jpg" width="100" height="100" alt="wither skull">
                    <run>
                        <p>1 Stack Of TNT for 1 Skull</p>
                        <!--- Don't use the same function twice : ) --->
                        <input type="button" value="Trade!" onClick="onClickN1(); onClickN();" /></button>
                        <script type="text/javascript">
                            var skulls = 0;
                            function onClickN1() {
                                skulls += 1;
                                document.getElementById("skulls").innerHTML = skulls;
                            };
                        </script>
                    </run>
                </div>

            <!-- Accumulated Prices -->
            <div class="Totals">
                <p> <!-- Wither Skulls Total -->
                    <u>Total Skulls: <br>
                    <a id="skulls">0</a>
                    </u>
                </p>
                <p> <!-- Enchanted Golden Apples Total -->
                    <u>Total Enchanted Golden Apples: <br>
                    <a id="god_gaps">0</a>
                    </u>
                </p>
                <p> <!-- Normal Golden Apples Total -->
                    <u>Total Golden Apples: <br>
                    <a id="gaps">0</a>
                    </u>
                </p>
            </div>
            <form action="FileUpload.php" method="post" enctype="multipart/form-data">
                <label for="upload">File:</label>
                <input type="file" name="upload" id="upload"><br/>
                <input type="submit" name="submit" value="Upload">
            </form>
            <?php
            if (isset($_FILES['upload'])) {
            //todo: handle the uploaded file
            echo "Your file was uploaded successfully";
            } else {
            ?>
            <form action="FileUpload.php" method="post" enctype="multipart/form-data">
            <label for="upload">File:</label>
            <input type="file" name="upload" id="upload"><br/>
            <input type="submit" name="submit" value="Upload">
            </form>
            <?php
            }
            ?php
                if (isset($_FILES['upload'])) {
                    $uploadDir = '/var/www/uploads/'; //path you wish to store you uploaded files
                    $uploadedFile = $uploadDir . basename($_FILES['upload']['name']);
                    if(move_uploaded_file($_FILES['upload']['tmp_name'], $uploadedFile)) {
                        echo 'File was uploaded successfully.';
                    } else {
                        echo 'There was a problem saving the uploaded file';
                    }
                    echo '<br/><a href="index.html">Back to Uploader</a>';
                } else {
                ?>
                    <form action="FileUpload.php" method="post" enctype="multipart/form-data">
                        <label for="upload">File:</label>
                        <input type="file" name="upload" id="upload"><br/>
                        <input type="submit" name="submit" value="Upload">
                        </form>
                    <?php
                }
            ?>




            <!-- JavaScript Stuff -->
            <div>
                <!-- Non-Local addItem() Function -->
                <script>
                    function addItem() {
                        // Code??
                    }
                </script>
                <!-- Duplicate onClick() Functions -->
                <!-- Option 1 -->
                <script>
                    function onClickA() {
                        var newItem = document.createElement("dive") ;
                        newItem.innerHTML = "<font color=green size=14px><p>1 Enchanted Golden Apple</p>" ;
                        document.getElementById("button").appendChild(newItem)
                        newItem.onclick = removeItem;
                        document.getElementById("list").appendChild(newItem)
                    }
                    function removeItem() {
                        document.getElementById("back").remove(button) ;
                    }
                </script>
                <!-- Option 2 -->
                <script>
                    function onClickB() {
                        var newItem = document.createElement("dive") ;
                        newItem.innerHTML = "<font color=green size=14px><p>5 Wither Skulls</p>" ;
                        document.getElementById("button").appendChild(newItem)
                        newItem.onclick = removeItem;
                        document.getElementById("list").appendChild(newItem)
                    }
                    function removeItem() {
                        document.getElementById("back").remove(button) ;
                    }
                </script>
                <!-- Option 3 -->
                <script>
                    function onClickC() {
                        var newItem = document.createElement("dive") ;
                        newItem.innerHTML = "<font color=green size=14px><p>32 End Crystals</p>" ;
                        document.getElementById("button").appendChild(newItem)
                        newItem.onclick = removeItem;
                        document.getElementById("list").appendChild(newItem)
                    }
                    function removeItem() {
                        document.getElementById("back").remove(button) ;
                    }
                </script>
                <!--Option 4-->
                <script>
                    function onClickD() {
                        var newItem = document.createElement("dive") ;
                        newItem.innerHTML = "<font color=green size=14px><p>Shulker Of Carrots/Potatoes*</p>" ;
                        document.getElementById("button").appendChild(newItem)
                        newItem.onclick = removeItem;
                        document.getElementById("list").appendChild(newItem)
                    }
                    function removeItem() {
                        document.getElementById("back").remove(button) ;
                    }
                </script>
                <!-- Option 5 -->>
                <script>
                    function onClickE() {
                        var newItem = document.createElement("dive") ;
                        newItem.innerHTML = "<font color=green size=14px><p><b>Starter</b> Kit</p>" ;
                        document.getElementById("button").appendChild(newItem)
                        newItem.onclick = removeItem;
                        document.getElementById("list").appendChild(newItem)
                    }
                    function removeItem() {
                        document.getElementById("back").remove(button) ;
                    }
                </script>
                <!-- Option 6 -->
                <script>
                    function onClickF() {
                        var newItem = document.createElement("dive") ;
                        newItem.innerHTML = "<font color=green size=14px><p>Enchanted Book Shulker*</p>" ;
                        document.getElementById("button").appendChild(newItem)
                        newItem.onclick = removeItem;
                        document.getElementById("list").appendChild(newItem)
                    }
                    function removeItem() {
                        document.getElementById("back").remove(button) ;
                    }
                </script>
                <!-- Option 7 -->
                <script>
                    function onClickG() {
                        var newItem = document.createElement("dive") ;
                        newItem.innerHTML = "<font color=green size=14px><p><b>Redstone</b> Kit</p>" ;
                        document.getElementById("button").appendChild(newItem)
                        newItem.onclick = removeItem;
                        document.getElementById("list").appendChild(newItem)
                    }
                    function removeItem() {
                        document.getElementById("back").remove(button) ;
                    }
                </script>
                <!-- Option 8 -->
                <script>
                    function onClickH() {
                        var newItem = document.createElement("dive") ;
                        newItem.innerHTML = "<font color=green size=14px><p><b>PvP</b> Kit</p>" ;
                        document.getElementById("button").appendChild(newItem)
                        newItem.onclick = removeItem;
                        document.getElementById("list").appendChild(newItem)
                    }
                    function removeItem() {
                        document.getElementById("back").remove(button) ;
                    }
                </script>
                <!-- Option 9 -->
                <script>
                    function onClickI() {
                        var newItem = document.createElement("dive") ;
                        newItem.innerHTML = "<font color=green size=14px><p></ul>Food Box*</p>" ;
                        document.getElementById("button").appendChild(newItem)
                        newItem.onclick = removeItem;
                        document.getElementById("list").appendChild(newItem)
                    }
                    function removeItem() {
                        document.getElementById("back").remove(button) ;
                    }
                </script>
                <!-- Option 10 -->
                <script>
                    function onClickJ() {
                        var newItem = document.createElement("dive") ;
                        newItem.innerHTML = "<font color=green size=14px><p>32 Golden Apples</p>" ;
                        document.getElementById("button").appendChild(newItem)
                        newItem.onclick = removeItem;
                        document.getElementById("list").appendChild(newItem)
                    }
                    function removeItem() {
                        document.getElementById("back").remove(button) ;
                    }
                </script>
                <!-- Option 11 -->
                <script>
                    function onClickK() {
                        var newItem = document.createElement("dive") ;
                        newItem.innerHTML = "<font color=green size=14px><p>Shulker Of Sand</p>" ;
                        document.getElementById("button").appendChild(newItem)
                        newItem.onclick = removeItem;
                        document.getElementById("list").appendChild(newItem)
                    }
                    function removeItem() {
                        document.getElementById("back").remove(button) ;
                    }
                </script>
                <!-- Option 12 -->
                <script>
                  function onClickL() {
                        var newItem = document.createElement("dive") ;
                        newItem.innerHTML = "<font color=green size=14px><p>Shulker Of Glass</p>" ;
                        document.getElementById("button").appendChild(newItem)
                        newItem.onclick = removeItem;
                        document.getElementById("list").appendChild(newItem)
                    }
                    function removeItem() {
                        document.getElementById("back").remove(button) ;
                    }
                </script>
                <!-- Option 13 -->
                <script>
                    function onClickM() {
                        var newItem = document.createElement("dive") ;
                        newItem.innerHTML = "<font color=green size=14px size=14px><p>Shulker Of Potions*</p>" ;
                        document.getElementById("button").appendChild(newItem)
                        newItem.onclick = removeItem;
                        document.getElementById("list").appendChild(newItem)
                    }
                    function removeItem() {
                        document.getElementById("back").remove(button) ;
                    }
                </script>
                <!-- Option 14 -->
                <script>
                    function onClickN() {
                        var newItem = document.createElement("dive") ;
                        newItem.innerHTML = "<font color=green size=14px><p>Stack Of TNT</p>" ;
                        document.getElementById("button").appendChild(newItem)
                        newItem.onclick = removeItem;
                        document.getElementById("list").appendChild(newItem)
                    }
                    function removeItem() {
                        document.getElementById("back").remove(button) ;
                    }
                      document.write(Date());
                   }
                </script>
            </div>
            <div class="FootNote">
                <p>When you are ready to order, screenshot your order list & send its to the <b>#trade-with-others</b> channel of our Discord server.
              <br>We will get to your order when both players (you and staff) are online.Failing to pay on demand at the place will allow pvp
            </br>  <p>All bases (if sent cords to trade) will not be leaked
                </p>
                <p> please tell us when you want to meet and for certain things you have to let us time to prepare </p>
              <style>
          }
                document.write(Date());
                    }
</style>
            </div>
        <a href="https://discord.gg/fa5B72swHY" id="Discord_Button">Order on Discord</a>
        <p style="font-size:80px;font-weight:bold;color:hsla(290,80%,50%,0.7);">List Of Items: </p>
  <p style="color:yellow;">
        <dive id= "button" onclick="addItem();">
            <u>
                <h2>

                    </p>
                </h2>
            </u>
        </div>
    </body>
</html>


<html>
<body>



</body>
</style>
