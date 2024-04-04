<?php
include ($_SERVER['DOCUMENT_ROOT'] . '/backend/header.php');
include ($_SERVER['DOCUMENT_ROOT'] . '/backend/common.php');
?>

<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Gifted Ideas</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karla&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat+Alternates&amp;display=swap">
    <link rel="stylesheet" href="../assets/css/Carousel-Multi-Image--ISA-.css">
    <link rel="stylesheet" href="../assets/css/Hero-Clean-Reverse-images.css">
    <link rel="stylesheet" href="../assets/css/Lightbox-Gallery-baguetteBox.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div data-include="templates/header"></div>

    <div class="container-fluid">
        <div class="row g-0">
            <div class="col-md-6">
                <div style="padding-top: 40px;padding-left: 60px;">
                    <style>
                        .drawing-area {
                            position: absolute;
                            z-index: 10;
                            width: 420px;
                            height: 420px;
                            left: 0px;
                            top: 0px;
                        }

                        .canvas-container {
                            width: 420px;
                            height: 420px;
                            position: relative;
                            user-select: none;
                        }

                        #tshirt-div {
                            top: 0px;
                            left: 0px;
                            width: 420px;
                            height: 420px;
                            margin-bottom: 10px;
                            position: relative;
                            background-color: #fff;
                        }

                        #canvas {
                            position: absolute;
                            width: 420px;
                            height: 420px;
                            left: 0px;
                            top: 0px;
                            user-select: none;
                            cursor: default;
                        }

                        #tshirt-backgroundpicture {
                            width: 420px;
                            height: 420px;
                        }
                    </style>

                    <!-- Create the container of the tool -->
                    <div id="tshirt-div">
                        <!-- 
        Initially, the image will have the background tshirt that has transparency
        So we can simply update the color with CSS or JavaScript dinamically
    -->
                        <img id="tshirt-backgroundpicture" src="../assets/img/product1shirt.jpg" />

                        <div id="drawingArea" class="drawing-area">
                            <div class="canvas-container">
                                <canvas id="tshirt-canvas" width="420" height="420"></canvas>
                            </div>
                        </div>
                    </div>

                    <p id="editp">To remove a loaded picture on the T-Shirt select it and press the <kbd>DEL</kbd> key.
                    </p>

                    <!--text change
                    <button id="add" type="button">Insert Text</button>
                    <select class="select2 font-change" data-type="fontFamily">
                      <option value="Arial">Arial</option>
                      <option value="Arial Black">Arial Black</option>
                      <option value="Impact">Impact</option>
                      <option value="Tahoma">Tahoma</option>
                      <option value="Times New Roman">Times New Roman</option>
                    </select>
                    <select class="select2 font-change" data-type="fontSize">
                      <option value="10">XXS</option>
                      <option value="20">XS</option>
                      <option value="30">S</option>
                      <option value="40">M</option>
                      <option value="50">L</option>
                      <option value="60">XL</option>
                      <option value="70">XXL</option>
                      <option value="80">XXXL</option>
                    </select>
                    
                    <input type="color" id="colorpicker" class="select2 font-change" data-type="color" value="#000000" data-jscolor=""/>
                    
                    <select class="select2 font-change" data-type="textAlign">
                      <option value="left">left</option>
                      <option value="center">center</option>
                      <option value="right">right</option>
                    </select>
                    -->

                    <div id="text-controls">

                        <h4>Options</h4>
                        <button onclick="Addtext()">Add Text</button>
                        <div class="input-field">
                            <select id="font-family">
                                <option value="sans-serif" selected>Sans serif</option>
                                <option value="serif">Serif</option>
                                <option value="monospace">Monospace</option>
                            </select>
                            <label>Font Family</label>
                        </div>

                        <div class="input-field color-pick">
                            <input type="color" placeholder="Text color" id="text-color" size="10" value='#000'>
                            <label for='text-color'>Text color <label>
                        </div>
                        <div class="input-field">
                            <select id="text-align">
                                <option value="left" selected>Left</option>
                                <option value="center">Center</option>
                                <option value="right">Right</option>
                                <option value="justify">Justify</option>
                            </select>
                            <label for='text-align'>Text align</label>
                        </div>
                        <div class="input-field color-pick">
                            <label for="text-font-size">Font Size</label>
                            <input type="range" min="12" max="120" step="1" value='45' id="text-font-size">

                        </div>

                        <div class="input-field color-pick">
                            <label for="text-line-height">Line Height</label>
                            <input type="range" min="0" max="10" step="0.1" id="text-line-height">
                        </div>
                        <p>
                            <label>
                                <input type="checkbox" name='fonttype' id="text-cmd-bold" />
                                <span>Bold</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input type='checkbox' name='fonttype' id="text-cmd-italic">
                                <span>Italic</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input type='checkbox' name='fonttype' id="text-cmd-underline">
                                <span>Underline</span>
                            </label>
                        </p>

                        <p>
                            <label>
                                <input type='checkbox' name='fonttype' id="text-cmd-linethrough">
                                <span>Linethrough</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input type='checkbox' name='fonttype' id="text-cmd-overline">
                                <span>Overline</span>
                            </label>
                        </p>

                    </div>

                    <hr>

                    <!-- The select that will allow the user to pick one of the static designs -->
                    <label for="tshirt-design">T-Shirt Design:</label>
                    <select id="tshirt-design">
                        <option value="" selected>Select one of our designs ...</option>
                        <option value="../assets/img/logo.png">Gifted Ideas Logo</option>
                    </select>
                    <br><br>
                    <label for="tshirt-custompicture">Upload your own design:</label>
                    <input type="file" id="tshirt-custompicture" />
                    <a id="savebtn " class="btn btn-light text-center me-2" role="button" onclick="saveFile()"
                        style="width: 120px;color: rgb(168,53,101);font-family: 'Montserrat Alternates', sans-serif;font-size: 13px;border-radius: 5px;">Save
                        Image</a>
                    <br><br>
                    <!-- Include Fabric.js in the page -->
                    <script src="../assets/js/fabric.min.js"></script>
                    <!-- Include DomToImage in the page -->
                    <script src="../assets/js/dom-to-image.min.js"></script>
                    <!-- Include FileSaver in the page -->
                    <script src="../assets/js/FileSaver.min.js"></script>

                    <script>
                        let canvas = new fabric.Canvas('tshirt-canvas');

                        function updateTshirtImage(imageURL) {
                            fabric.Image.fromURL(imageURL, function (img) {
                                img.scaleToHeight(200);
                                img.scaleToWidth(200);
                                canvas.centerObject(img);
                                canvas.add(img);
                                canvas.renderAll();
                            });
                        }

                        //WATERMARK
                        fabric.Image.fromURL("../assets/img/logo.png", function (img) {
                            img.scaleToHeight(150);
                            img.scaleToWidth(150);
                            canvas.add(img);
                            canvas.item(0).selectable = false;
                            canvas.item(0).top = 300;
                            canvas.item(0).left = 280;
                        });


                        //text
                        //canvas.add(new fabric.IText('Tap and Type', { 
                        //  fontFamily: 'arial black',
                        //  left: 100, 
                        //  top: 100 ,
                        //}));



                        // Update the TShirt according to the selected dropdown by the user
                        document.getElementById("tshirt-design").addEventListener("click", function () {

                            // Call the updateTshirtImage method providing as first argument the URL
                            // of the image provided by the select
                            updateTshirtImage(this.value);
                        }, false);

                        // When the user clicks on upload a custom picture
                        document.getElementById('tshirt-custompicture').addEventListener("change", function (e) {
                            var reader = new FileReader();

                            reader.onload = function (event) {
                                var imgObj = new Image();
                                imgObj.src = event.target.result;

                                // When the picture loads, create the image in Fabric.js
                                imgObj.onload = function () {
                                    var img = new fabric.Image(imgObj);

                                    img.scaleToHeight(150);
                                    img.scaleToWidth(150);
                                    canvas.centerObject(img);
                                    canvas.add(img);
                                    canvas.renderAll();
                                };
                            };

                            // If the user selected a picture, load it
                            if (e.target.files[0]) {
                                reader.readAsDataURL(e.target.files[0]);
                            }
                        }, false);

                        // When the user selects a picture that has been added and press the DEL key
                        // The object will be removed !
                        document.addEventListener("keydown", function (e) {
                            var keyCode = e.keyCode;

                            if (keyCode == 46) {
                                console.log("Removing selected element on Fabric.js on DELETE key !");
                                canvas.remove(canvas.getActiveObject());
                            }
                        }, false);

                    </script>

                    <!--script>
                    //Special script function to be called (text box) aaaaaa
                    var appObject = function() {

                      return {
                        __canvas: canvas,
                        __tmpgroup: {},

                        addText: function() {
                          var newID = (new Date()).getTime().toString().substr(5);
                          var text = new fabric.IText('Your Text Here', {
                            fontFamily: 'arial',
                            top: 200,
                            left: 80,
                            myid: newID,
                            objecttype: 'text'
                          });

                          this.__canvas.add(text);
                          this.addLayer(newID, 'text');
                        },
                        setTextParam: function(param, value) {
                          var obj = this.__canvas.getActiveObject();
                          if (obj) {
                            if (param == 'color') {
                              obj.set('fill', this.value);
                            } else {
                              obj.set(param, value);
                            }
                            this.__canvas.renderAll();
                          }
                        },
                        setTextValue: function(value) {
                          var obj = this.__canvas.getActiveObject();
                          if (obj) {
                            obj.setText(value);
                            this.__canvas.renderAll();
                          }
                        },
                        addLayer: function() {

                        }

                      };
                    }
                    

                    $(document).ready(function() {

                      var app = appObject();

                      $('.font-change').change(function(event) {
                        app.setTextParam($(this).data('type'), $(this).find('option:selected').val());
                      });

                      $('#add').click(function() {
                        app.addText();
                      });

                    })					
                    </script-->


                    <script>
                        function Addtext() {
                            canvas.add(
                                new fabric.Textbox("Start Typing...", {
                                    left: 50,
                                    top: 100,
                                    fontFamily: "sans-serif",
                                    fill: "#000",
                                    fontSize: 45,
                                    fixedWidth: 300,
                                    width: 300
                                })
                            );
                        }


                        // canvas.on('text:changed', (event) => {
                        //       var textLabel = event.target;
                        //       if (textLabel.width > textLabel.fixedWidth) {
                        //         textLabel.fontSize *= textLabel.fixedWidth / (textLabel.width + 1);
                        //         textLabel.width = textLabel.fixedWidth;
                        //       }
                        //       canvas.renderAll();
                        //     });

                        // Edit Text
                        document.getElementById("text-color").addEventListener("change", (event) => {
                            canvas.getActiveObject().set("fill", event.target.value);
                            canvas.renderAll();
                        });
                        document.getElementById("font-family").addEventListener("change", (event) => {
                            canvas.getActiveObject().set("fontFamily", event.target.value);
                            canvas.renderAll();
                        });
                        document
                            .getElementById("text-font-size")
                            .addEventListener("change", (event) => {
                                canvas.getActiveObject().set("fontSize", event.target.value);
                                canvas.renderAll();
                            });
                        document
                            .getElementById("text-line-height")
                            .addEventListener("change", (event) => {
                                canvas.getActiveObject().set("lineHeight", event.target.value);
                                canvas.renderAll();
                            });
                        document.getElementById("text-align").addEventListener("change", (event) => {
                            canvas.getActiveObject().set("textAlign", event.target.value);
                            canvas.renderAll();
                        });

                        var fontTypeProps = document.getElementsByName("fonttype");

                        for (var i = 0, max = fontTypeProps.length; i < max; i += 1) {
                            fontTypeProps[i].onclick = function () {
                                var canvasActiveObj = canvas.getActiveObject();
                                if (document.getElementById(this.id).checked == true) {
                                    if (this.id === "text-cmd-bold") {
                                        canvasActiveObj.set("fontWeight", "bold");
                                    }
                                    if (this.id === "text-cmd-italic") {
                                        canvasActiveObj.set("fontStyle", "italic");
                                    }
                                    if (this.id === "text-cmd-underline") {
                                        canvasActiveObj.set("underline", true);
                                    }
                                    if (this.id === "text-cmd-linethrough") {
                                        canvasActiveObj.set("linethrough", true);
                                    }
                                    if (this.id === "text-cmd-overline") {
                                        canvasActiveObj.set("overline", true);
                                    }
                                } else {
                                    if (this.id === "text-cmd-bold") {
                                        canvasActiveObj.set("fontWeight", "");
                                    }
                                    if (this.id === "text-cmd-italic") {
                                        canvasActiveObj.set("fontStyle", "");
                                    }
                                    if (this.id === "text-cmd-underline") {
                                        canvasActiveObj.set("underline", false);
                                    }
                                    if (this.id === "text-cmd-linethrough") {
                                        canvasActiveObj.set("linethrough", false);
                                    }
                                    if (this.id === "text-cmd-overline") {
                                        canvasActiveObj.set("overline", false);
                                    }
                                }
                                canvas.renderAll();
                                console.info(canvasActiveObj);
                            };
                        }

                        // Do some initializing stuff
                        fabric.Object.prototype.set({
                            transparentCorners: true,
                            cornerColor: "#22A7F0",
                            borderColor: "#22A7F0",
                            cornerSize: 12,
                            padding: 5
                        });

                    </script>


                    <script>
                        //for switching products
                        document.getElementById("product1").onclick = function () { product1() };
                        document.getElementById("product2").onclick = function () { product2() };
                        document.getElementById("product3").onclick = function () { product3() };
                        document.getElementById("product4").onclick = function () { product4() };
                        document.getElementById("product5").onclick = function () { product5() };
                        document.getElementById("product6").onclick = function () { product6() };
                        document.getElementById("product7").onclick = function () { product7() };
                        document.getElementById("product8").onclick = function () { product8() };

                        function product1() {
                            document.getElementById("tshirt-backgroundpicture").src = "../assets/img/product1shirt.jpg";
                        }

                        function product2() {
                            document.getElementById("tshirt-backgroundpicture").src = "../assets/img/product2mug.jpg";
                        }

                        function product3() {
                            document.getElementById("tshirt-backgroundpicture").src = "../assets/img/product3cup.jpg";
                        }

                        function product4() {
                            document.getElementById("tshirt-backgroundpicture").src = "../assets/img/product4pen.jpg";
                        }

                        function product5() {
                            document.getElementById("tshirt-backgroundpicture").src = "../assets/img/product5jacket.jpg";
                        }

                        function product6() {
                            document.getElementById("tshirt-backgroundpicture").src = "../assets/img/product6pillow.jpg";
                        }

                        function product7() {
                            document.getElementById("tshirt-backgroundpicture").src = "../assets/img/product7phonecase.jpg";
                        }

                        function product8() {
                            document.getElementById("tshirt-backgroundpicture").src = "../assets/img/product8totebag.jpg";
                        }

                    </script>

                    <script>
                        function saveFile() {
                            // Define as node the T-Shirt Div
                            var node = document.getElementById('tshirt-div');

                            domtoimage.toBlob(node)
                                .then(function (blob) {
                                    window.saveAs(blob, 'download.png');
                                });
                        }
                    </script>

                </div>
            </div>
            <div class="col-md-6">
                <section class="photo-gallery py-4 py-xl-5">
                    <div class="container">
                        <div class="row mb-5">
                            <div class="col-md-8 col-xl-6 text-center mx-auto">
                                <h2 style="font-family: 'Montserrat Alternates', sans-serif;font-weight: bold;">Products
                                    Editor</h2>
                            </div>
                        </div>
                        <div
                            class="row gx-1 gy-1 row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-4 photos">
                            <div class="col item"><a id="product1" onclick="product1()" href="#">
                                    <div class="card">
                                        <div class="card-body"
                                            style="background: #dedede;text-align: center;padding-bottom: 0px;"><img
                                                class="img-fluid" src="../assets/img/product1shirt.jpg">
                                            <h6 class="card-title"
                                                style="font-family: 'Montserrat Alternates', sans-serif;font-weight: bold;margin-top: 5px;">
                                                Shirt</h6>
                                        </div>
                                    </div>
                                </a></div>
                            <div class="col item"><a id="product2" onclick="product2()" href="#">
                                    <div class="card">
                                        <div class="card-body"
                                            style="background: #dedede;text-align: center;padding-bottom: 0px;"><img
                                                class="img-fluid" src="../assets/img/product2mug.jpg">
                                            <h6 class="card-title"
                                                style="font-family: 'Montserrat Alternates', sans-serif;font-weight: bold;margin-top: 5px;">
                                                Mug</h6>
                                        </div>
                                    </div>
                                </a></div>
                            <div class="col item"><a id="product3" href="#" onclick="product3()">
                                    <div class="card">
                                        <div class="card-body"
                                            style="background: #dedede;text-align: center;padding-bottom: 0px;"><img
                                                class="img-fluid" src="../assets/img/product3cup.jpg">
                                            <h6 class="card-title"
                                                style="font-family: 'Montserrat Alternates', sans-serif;font-weight: bold;margin-top: 5px;">
                                                Cup</h6>
                                        </div>
                                    </div>
                                </a></div>
                            <div class="col item"><a id="product4" href="#" onclick="product4()">
                                    <div class="card">
                                        <div class="card-body"
                                            style="background: #dedede;text-align: center;padding-bottom: 0px;"><img
                                                class="img-fluid" src="../assets/img/product4pen.jpg"
                                                style="background: #ffffff;">
                                            <h6 class="card-title"
                                                style="font-family: 'Montserrat Alternates', sans-serif;font-weight: bold;margin-top: 5px;">
                                                Pen</h6>
                                        </div>
                                    </div>
                                </a></div>
                            <div class="col item"><a id="product5" href="#" onclick="product5()">
                                    <div class="card">
                                        <div class="card-body"
                                            style="background: #dedede;text-align: center;padding-bottom: 0px;"><img
                                                class="img-fluid" src="../assets/img/product5jacket.jpg"
                                                style="background: #ffffff;">
                                            <h6 class="card-title"
                                                style="font-family: 'Montserrat Alternates', sans-serif;font-weight: bold;margin-top: 5px;">
                                                Jacket</h6>
                                        </div>
                                    </div>
                                </a></div>
                            <div class="col item"><a id="product6" href="#" onclick="product6()">
                                    <div class="card">
                                        <div class="card-body"
                                            style="background: #dedede;text-align: center;padding-bottom: 0px;"><img
                                                class="img-fluid" src="../assets/img/product6pillow.jpg"
                                                style="background: #ffffff;" width="254" height="135">
                                            <h6 class="card-title"
                                                style="font-family: 'Montserrat Alternates', sans-serif;font-weight: bold;margin-top: 5px;">
                                                Pillow case</h6>
                                        </div>
                                    </div>
                                </a></div>
                            <div class="col item"><a id="product7" href="#" onclick="product7()">
                                    <div class="card">
                                        <div class="card-body"
                                            style="background: #dedede;text-align: center;padding-bottom: 0px;"><img
                                                class="img-fluid" src="../assets/img/product7phonecase.jpg"
                                                style="background: #ffffff;">
                                            <h6 class="card-title"
                                                style="font-family: 'Montserrat Alternates', sans-serif;font-weight: bold;margin-top: 5px;">
                                                Phone case</h6>
                                        </div>
                                    </div>
                                </a></div>
                            <div class="col item"><a id="product8" href="#" onclick="product8()">
                                    <div class="card">
                                        <div class="card-body"
                                            style="background: #dedede;text-align: center;padding-bottom: 0px;"><img
                                                class="img-fluid" src="../assets/img/product8totebag.jpg"
                                                style="background: #ffffff;">
                                            <h6 class="card-title"
                                                style="font-family: 'Montserrat Alternates', sans-serif;font-weight: bold;margin-top: 5px;">
                                                Tote bag</h6>
                                        </div>
                                    </div>
                                </a></div>
                        </div>
                    </div>


                </section>
            </div>
        </div>
    </div>

    <div data-include="templates/footer"></div>
    <script src="../assets/bootstrap/js/jscolor.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/dom-to-image.min.js"></script>
    <script src="../assets/js/fabric.min.js"></script>
    <script src="../assets/js/FileSaver.min.js"></script>
    <script src="../assets/js/Lightbox-Gallery-baguetteBox.min.js"></script>
    <script src="../assets/js/Lightbox-Gallery.js"></script>
    <script src="/src/global.js"></script>
</body></html>