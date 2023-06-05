@extends('layouts.admin')
@section('content')
    <style>
        .canvas-container {
            height: 270px;
            width: 450px;
            background-color: white;
            border-radius: 25px;
            background-image: url('{{ asset('frontend/img/visting_imges/front.jpg') }}');
            background-size: cover;
            background-repeat: no-repeat;
        }

        .input-hidden {
            /* For Hiding Radio Button Circles */
            position: absolute;
            left: -9999px;
        }

        input[type="radio"]:checked+label>img {
            border: 1px solid #d12229;
            box-shadow: 0 0 3px 3px #d12229;
        }

        input[type="radio"]+label>img {
            border: 1px rgb(0, 0, 0);
            padding: 10px;

            transition: 500ms all;
        }

        input[type="radio"]:checked+label>img {
            transform: rotateZ(-5deg) rotateX(5deg);
        }

        .back_image {
            width: 100%;
            box-sizing: border-box;
            height: 330px;
            background-size: cover;
            background-repeat: no-repeat;
            position: relative;
            border-radius: 20px;
            border-bottom-left-radius: 0px 0px;
            border-bottom-right-radius: 0px 0px;
        }

        .back_image_temp {
            width: 300px;
            height: 200px;
            box-sizing: border-box;
            margin-bottom: 20 auto;
            background-size: cover;
            background-repeat: no-repeat;
            position: relative;
            border-radius: 20px;
        }

        .upload-btn-wrapper {
            position: relative;
            overflow: hidden;
            display: inline-block;
        }

        .btn {
            border: 2px solid gray;
            color: gray;
            background-color: white;
            padding: 8px 20px;
            border-radius: 8px;
            font-size: 20px;
            font-weight: bold;
        }

        .upload-btn-wrapper input[type=file] {
            font-size: 100px;
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
        }

        .toolbar-btn {
            margin-left: 10px;
            color: black;
            font-size: 25px;
        }

        .toolbar {
            margin-top: 10px;
            background-color: white;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px #000000;
            margin-bottom: 10px
        }

        .line_upper {
            width: 35px;
            height: 35px;
            cursor: pointer;
            -webkit-transition: all linear .2s;
            -moz-transition: all linear .2s;
            -ms-transition: all linear .2s;
            -o-transition: all linear .2s;
            transition: all linear .2s;
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            margin-left: 10px;
        }

        .uploaded-image {
            position: relative;
            display: inline-block;
        }

        .back_image_temp {
            transition: filter 0.3s ease;
            /* Add transition effect for the image */
        }


        .delete-button {
            position: absolute;
            top: 50%;
            left: 40%;
            transform: translate(-50%, -50%);
            background-color: red;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            opacity: 0;
            transition: opacity 0.3s ease;
            font-family: Arial, sans-serif;
            font-size: 16px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .uploaded-image:hover .back_image_temp {
            /* filter: blur(5px); */
            /* Apply blur effect to the image on hover */
        }

        .uploaded-image:hover .delete-button {
            opacity: 1;
        }

        @media screen and (max-width: 600px) {
            .canvas-container {
                height: 200px;
                width: 350px;
            }

        }
    </style>
    <div class="content-wrapper">
        <input type="hidden" id="company_id" value="{{ empty($company) ? 'none' : $company->id }}">
        <input type="hidden" id="use_username" value="{{ $use_username }}">
        <section class="content-header">
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-md-8'>
                        <div class="toolbar">
                            <div class="row">
                                <div class="col-md-2">
                                    <select class="form-control fonts" id="fonts" onchange="updateFontFamily(this)">
                                        <option>Select Font</option>
                                        <option value="Arial" style="font-family: Arial;">Arial</option>
                                        <option value="Times New Roman" style="font-family: 'Times New Roman';">Times New
                                            Roman</option>
                                        <option value="Helvetica" style="font-family: Helvetica;">Helvetica</option>
                                        <option value="Courier New" style="font-family: 'Courier New';">Courier New</option>
                                        <option value="Verdana" style="font-family: Verdana;">Verdana</option>
                                        <option value="Georgia" style="font-family: Georgia;">Georgia</option>
                                        <option value="Impact" style="font-family: Impact;">Impact</option>
                                        <option value="Tahoma" style="font-family: Tahoma;">Tahoma</option>
                                        <option value="Calibri" style="font-family: Calibri;">Calibri</option>
                                        <option value="Palatino" style="font-family: Palatino;">Palatino</option>
                                        <option value="Arial Narrow" style="font-family: 'Arial Narrow';">Arial Narrow
                                        </option>
                                        <option value="Century Gothic" style="font-family: 'Century Gothic';">Century Gothic
                                        </option>
                                        <option value="Comic Sans MS" style="font-family: 'Comic Sans MS';">Comic Sans MS
                                        </option>
                                        <option value="Lucida Sans" style="font-family: 'Lucida Sans';">Lucida Sans</option>
                                        <option value="Garamond" style="font-family: Garamond;">Garamond</option>
                                        <option value="Bookman Old Style" style="font-family: 'Bookman Old Style';">Bookman
                                            Old Style</option>
                                        <option value="Arial Black" style="font-family: 'Arial Black';">Arial Black</option>
                                        <option value="Century" style="font-family: Century;">Century</option>
                                        <option value="Franklin Gothic Medium"
                                            style="font-family: 'Franklin Gothic Medium';">Franklin Gothic Medium</option>
                                        <option value="Trebuchet MS" style="font-family: 'Trebuchet MS';">Trebuchet MS
                                        </option>
                                        <option value="Baskerville" style="font-family: Baskerville;">Baskerville</option>
                                        <option value="Impact" style="font-family: Impact;">Impact</option>
                                        <option value="Copperplate Gothic" style="font-family: 'Copperplate Gothic';">
                                            Copperplate Gothic</option>
                                        <option value="Rockwell" style="font-family: Rockwell;">Rockwell</option>
                                        <option value="Segoe UI" style="font-family: 'Segoe UI';">Segoe UI</option>
                                        <option value="Futura" style="font-family: Futura;">Futura</option>
                                        <option value="Arial Rounded MT" style="font-family: 'Arial Rounded MT';">Arial
                                            Rounded MT</option>
                                        <option value="Cambria" style="font-family: Cambria;">Cambria</option>
                                        <option value="Brush Script MT" style="font-family: 'Brush Script MT';">Brush Script
                                            MT</option>
                                        <option value="Consolas" style="font-family: Consolas;">Consolas</option>
                                        <option value="Helvetica Neue" style="font-family: 'Helvetica Neue';">Helvetica Neue
                                        </option>
                                        <option value="Lucida Grande" style="font-family: 'Lucida Grande';">Lucida Grande
                                        </option>
                                        <option value="Arial Unicode MS" style="font-family: 'Arial Unicode MS';">Arial
                                            Unicode MS</option>
                                        <option value="Candara" style="font-family: Candara;">Candara</option>
                                        <option value="Geneva" style="font-family: Geneva;">Geneva</option>
                                    </select>

                                </div>
                                <div class="col-md-1">
                                    <div class="color-font" id="color-font">
                                        <div class="line_upper" id="line_upper" style="background:black;"></div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <a id="reset" class="toolbar-btn" href="javascript:void(0)"><i
                                            class="fa-solid fa-window-restore"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='col-md-4'>
                        <button class="btn btn-primary float-right" id="download">Download</button>
                    </div>
                </div>
            </div>
        </section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="canvas-container" id="canvas-container"></div>
                </div>
                <div class="col-md-6" id="out_side">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-3">
                            <label for="card_shape">Card Shape:</label>
                            <select class="form-control" id="card_shape">
                                <option value="25px" selected>Rounded</option>
                                <option value="0px">Corner</option>
                            </select>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="upload-btn-wrapper">
                                <button class="btn">Upload a Image</button>
                                <input type="file" name="image" id="image" class="form-control"
                                    style="margin-top: 20px;">
                                <span>Image Dimension: 1920 X 1080</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row ml-4" style="margin-top:100px">
            @if (auth()->user()->user_type != 'company_user')
                <div class="col-md-12 ml-4 mt-2 mb-4">
                    <h4 style="font-family:Palatino;font-weight:bold;">Background Images:</h4>
                </div>
                <div class="col-md-4">
                    <input type="radio" name="background_image" id="background_image1" class="input-hidden"
                        value="{{ asset('frontend/img/visting_imges/front.jpg') }}" checked>
                    <label for="background_image1">
                        <img src="{{ asset('frontend/img/visting_imges/front.jpg') }}" alt=""
                            class="back_image_temp">
                    </label>
                </div>
                <div class="col-md-4">
                    <input type="radio" name="background_image" id="background_image2" class="input-hidden"
                        value="{{ asset('frontend/img/visting_imges/1.jpg') }}">
                    <label for="background_image2">
                        <img src="{{ asset('frontend/img/visting_imges/1.jpg') }}" alt=""
                            class="back_image_temp">
                    </label>
                </div>
                <div class="col-md-4">
                    <input type="radio" name="background_image" id="background_image3" class="input-hidden"
                        value="{{ asset('frontend/img/visting_imges/2.png') }}">
                    <label for="background_image3">
                        <img src="{{ asset('frontend/img/visting_imges/2.png') }}" alt=""
                            class="back_image_temp">
                    </label>
                </div>
                <div class="col-md-4">
                    <input type="radio" name="background_image" id="background_image4" class="input-hidden"
                        value="{{ asset('frontend/img/visting_imges/3.jpg') }}">
                    <label for="background_image4">
                        <img src="{{ asset('frontend/img/visting_imges/3.jpg') }}" alt=""
                            class="back_image_temp">
                    </label>
                </div>
                <div class="col-md-4">
                    <input type="radio" name="background_image" id="background_image5" class="input-hidden"
                        value="{{ asset('frontend/img/visting_imges/4.jpg') }}">
                    <label for="background_image5">
                        <img src="{{ asset('frontend/img/visting_imges/4.jpg') }}" alt=""
                            class="back_image_temp">
                    </label>
                </div>
                <div class="col-md-4">
                    <input type="radio" name="background_image" id="background_image6" class="input-hidden"
                        value="{{ asset('frontend/img/visting_imges/5.jpg') }}">
                    <label for="background_image6">
                        <img src="{{ asset('frontend/img/visting_imges/5.jpg') }}" alt=""
                            class="back_image_temp">
                    </label>
                </div>
            @endif
        </div>
        @if ($visting_card_backgrounds)
            <div class="row ml-4">
                <div class="col-md-12 ml-4 mt-2 mb-4">
                    <h4 style="font-family: Palatino; font-weight: bold;">Company's Background Images:</h4>
                </div>
                @foreach ($visting_card_backgrounds as $image)
                    <div class="col-md-4 uploaded-image">
                        <input type="radio" name="background_image" id="background_image{{ $image->id }}"
                            class="input-hidden" value="{{ asset('visting_card_images') }}/{{ $image->image }}">
                        <label for="background_image{{ $image->id }}">
                            <img src="{{ asset('visting_card_images') }}/{{ $image->image }}" alt=""
                                class="back_image_temp">
                            <button class="delete-button" data-filename="{{ $image->image }}"><i
                                    class="fa-solid fa-trash fa-xl"></i></button>
                        </label>
                    </div>
                @endforeach
            </div>
        @endif

        <!-- Add the modal markup -->
        <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="confirmDeleteModalLabel">Confirm Deletion</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete this image?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        var font_color = document.getElementById("color-font");
        //hide font_color
        // font_color.style.display="none";
        //card_shape change
        var card_shape = document.getElementById("card_shape");
        card_shape.addEventListener("change", function() {
            var card_shape = document.getElementById("card_shape").value;
            document.getElementById('canvas-container').style.borderRadius = card_shape;
        });
        //background image change
        var background_image = document.getElementsByName("background_image");
        for (var i = 0; i < background_image.length; i++) {
            background_image[i].addEventListener("change", function() {
                var background_image = document.querySelector('input[name="background_image"]:checked').value;
                document.getElementById('canvas-container').style.backgroundImage = "url('" + background_image +
                    "')";
            });
        }

        //image upload
        var image = document.getElementById("image");
        image.addEventListener("change", function() {
            var image = document.getElementById("image").files[0];
            var reader = new FileReader();
            reader.onload = function() {
                document.getElementById('canvas-container').style.backgroundImage = "url('" + reader.result +
                    "')";
                base64 = reader.result;
                //send base64 to server
                var company_id = document.getElementById("company_id").value;
                if (company_id) {
                    $.ajax({
                        type: "POST",
                        url: "{{ route('save_visting_card_backgrounds') }}",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            "image": base64,
                        },
                        success: function(data) {
                            console.log(data);
                        }
                    });
                }
            }
            reader.readAsDataURL(image);
        });

        // $('.delete-button').click(function() {
        //     var filename = $(this).data('filename');
        //     var $button = $(this); // Store reference to the button element

        //     $.ajax({
        //         url: '{{ route('delete-visting-card-backgroundImages') }}',
        //         type: 'POST',
        //         data: {
        //             filename: filename,
        //             _token: '{{ csrf_token() }}'
        //         },
        //         success: function(response) {
        //             if (response.success) {
        //                 // Remove the deleted image element from the DOM
        //                 $button.closest('.uploaded-image').remove();
        //                 alert('Image deleted successfully.');
        //             } else {
        //                 alert('Failed to delete image: ' + response.error);
        //             }
        //         },
        //         error: function() {
        //             alert('An error occurred while deleting the image.');
        //         }
        //     });
        // });
        $('.delete-button').click(function() {
            var filename = $(this).data('filename');
            var $button = $(this); // Store reference to the button element

            // Set the filename as a data attribute of the delete button
            $('#confirmDeleteBtn').data('filename', filename);

            // Show the confirmation modal
            $('#confirmDeleteModal').modal('show');
        });
        //delete background images
        $('#confirmDeleteBtn').click(function() {
            var filename = $(this).data('filename');

            $.ajax({
                url: '{{ route('delete-visting-card-backgroundImages') }}',
                type: 'POST',
                data: {
                    filename: filename,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    if (response.success) {
                        // Remove the deleted image element from the DOM
                        $('.delete-button[data-filename="' + filename + '"]').closest('.uploaded-image')
                            .remove();
                        // alert('Image deleted successfully.');
                    } else {
                        alert('Failed to delete image: ' + response.error);
                    }
                },
                error: function() {
                    alert('An error occurred while deleting the image.');
                }
            });

            // Hide the confirmation modal
            $('#confirmDeleteModal').modal('hide');
        });

        //canvas container widht and height
        const width = 450;
        const height = 270;
        console.log(width);
        console.log(height);
        const stage = new Konva.Stage({
            container: 'canvas-container',
            width: width,
            height: height,
        });
        const layer = new Konva.Layer();
        stage.add(layer);
        //add name
        const name = new Konva.Text({
            x: 20,
            y: 20,
            text: '{{ $card->name }}',
            fontSize: 20.8,
            fontFamily: 'Cambria',
            fontWieght: 'bold',
            fill: 'black',
            draggable: true
        });
        //add transformer
        const texttransformer = new Konva.Transformer();
        layer.add(texttransformer);
        name.on('click', () => {
            texttransformer.attachTo(name);
            layer.batchDraw();
        });
        layer.add(name);
        layer.draw();
        //add designation
        const designation = new Konva.Text({
            x: 20,
            y: 80,
            text: '{{ $card->designation }}',
            fontSize: 13.8,
            fontFamily: 'Cambria',
            fontWieght: 'bold',
            fill: 'black',
            draggable: true
        });
        layer.add(texttransformer);
        designation.on('click', () => {
            texttransformer.attachTo(designation);
            layer.batchDraw();
        });
        layer.add(designation);
        layer.draw();
        //add email
        const email = new Konva.Text({
            x: 20,
            y: 100,
            text: '{{ $card->email }}',
            fontSize: 13.8,
            fontFamily: 'Cambria',
            fontWieght: 'bold',
            fill: 'black',
            draggable: true
        });
        layer.add(texttransformer);
        email.on('click', () => {
            texttransformer.attachTo(email);
            layer.batchDraw();
        });
        layer.add(email);
        layer.draw();
        //add phone
        const phone = new Konva.Text({
            x: 20,
            y: 120,
            text: '{{ $card->phone }}',
            fontSize: 13.8,
            fontFamily: 'Cambria',
            fontWieght: 'bold',
            fill: 'black',
            draggable: true
        });
        layer.add(texttransformer);
        phone.on('click', () => {
            texttransformer.attachTo(phone);
            layer.batchDraw();
        });
        layer.add(phone);
        layer.draw();
        //add company
        const company = new Konva.Text({
            x: 20,
            y: 140,
            text: '{{ $card->company }}',
            fontSize: 13.8,
            fontFamily: 'Cambria',
            fontWieght: 'bold',
            fill: 'black',
            draggable: true
        });
        layer.add(texttransformer);
        company.on('click', () => {
            texttransformer.attachTo(company);
            layer.batchDraw();
        });
        layer.add(company);
        layer.draw();
        //add QR code
        var company_id = document.getElementById("company_id").value;
        var use_username = document.getElementById("use_username").value;
        url = "{{ route('view_profile', $card->id) }}";
        if (use_username == 1) {
            url = "{{ route('view_profile', $card->username) }}";
        }
        var qrCodeImage = new Image();

        if (company_id !== 'none') {
            var qrCode = new QRCodeStyling({
                width: 120,
                height: 120,
                type: "canvas",
                data: url,
                image: "{{ asset('company_logos') }}/{{ empty($company) ? 'default.png' : $company->logo }}",
                dotsOptions: {
                    color: "black",
                    type: "classy-rounded"
                },
                backgroundOptions: {
                    color: "#ffffff",
                },
                imageOptions: {
                    crossOrigin: "anonymous",
                    margin: 0,
                    imageSize: 0.4,
                },
                qrOptions: {
                    errorCorrectionLevel: "H",
                },
            });
        } else {
            var qrCode = new QRCodeStyling({
                width: 120,
                height: 120,
                type: "canvas",
                data: url,
                image: "{{ asset('frontend/img/qr_logo.svg') }}",
                dotsOptions: {
                    color: "black",
                    type: "classy-rounded"
                },
                backgroundOptions: {
                    color: "#ffffff",
                },
                imageOptions: {
                    crossOrigin: "anonymous",
                    margin: 0,
                    imageSize: 0.4,
                },
                qrOptions: {
                    errorCorrectionLevel: "H",
                },
            });
        }
        qrCode.getRawData("image/png", 120).then(
            function(dataURL) {
                // convert blob to base64
                var reader = new FileReader();
                reader.readAsDataURL(dataURL);
                reader.onloadend = function() {
                    base64 = reader.result;
                    console.log(base64);
                    qrCodeImage.src = base64;
                    qrCodeImage.onload = function() {
                        const qrCodeKonva = new Konva.Image({
                            x: 320,
                            y: 130,
                            image: qrCodeImage,
                            width: 120,
                            height: 120,
                            draggable: true
                        });
                        qrCodeKonva.on('click', () => {
                            texttransformer.attachTo(qrCodeKonva);
                            layer.batchDraw();
                            //press delete key to delete the object
                            window.addEventListener('keydown', function(e) {
                                if (e.keyCode === 46) {
                                    qrCodeKonva.destroy();
                                    layer.draw();
                                }
                            });

                        });
                        layer.add(qrCodeKonva);
                        layer.draw();
                    };
                }
            }
        );
        // Set the snap size
        const snapSize = 10;

        // Function to snap a value to the nearest grid line
        function snapToGrid(value) {
            return Math.round(value / snapSize) * snapSize;
        }

        // Function to update the position of an object and snap it to the grid
        function updateObjectPosition(obj) {
            const snappedX = snapToGrid(obj.x());
            const snappedY = snapToGrid(obj.y());
            obj.position({
                x: snappedX,
                y: snappedY
            });
            // Add the canvas state to the history
            // addCanvasState();
            layer.batchDraw();
        }

        // Add event listeners to objects for dragging
        name.on('dragmove', function() {
            updateObjectPosition(this);
        });

        // Add event listeners to objects for snapping on release
        name.on('dragend', function() {
            updateObjectPosition(this);
        });
        designation.on('dragmove', function() {
            updateObjectPosition(this);
        });
        designation.on('dragend', function() {
            updateObjectPosition(this);
        });
        email.on('dragmove', function() {
            updateObjectPosition(this);
        });
        email.on('dragend', function() {
            updateObjectPosition(this);
        });
        phone.on('dragmove', function() {
            updateObjectPosition(this);
        });
        phone.on('dragend', function() {
            updateObjectPosition(this);
        });
        company.on('dragmove', function() {
            updateObjectPosition(this);
        });
        company.on('dragend', function() {
            updateObjectPosition(this);
        });
        // Add event listeners to objects for dragging





        let selectedText = name;
        document.addEventListener('keydown', (event) => {
            if (selectedText && (event.key === 'Delete' || event.key === 'Backspace')) {
                selectedText.remove();
                selectedText = null;
                layer.batchDraw();
            }
        });

        name.on('click', () => {
            if (selectedText === name) return;

            if (selectedText) {
                selectedText.stroke(null);
                selectedText = null;
            }

            selectedText = name;
            //   selectedText.stroke('red');
            layer.batchDraw();
            // show font_color
            font_color.style.display = "block";
        });

        designation.on('click', () => {
            if (selectedText === designation) return;

            if (selectedText) {
                selectedText.stroke(null);
                selectedText = null;
            }

            selectedText = designation;
            //   selectedText.stroke('red');
            layer.batchDraw();
        });
        email.on('click', () => {
            if (selectedText === email) return;

            if (selectedText) {
                selectedText.stroke(null);
                selectedText = null;
            }

            selectedText = email;
            //   selectedText.stroke('red');
            layer.batchDraw();
        });
        company.on('click', () => {
            if (selectedText === company) return;

            if (selectedText) {
                selectedText.stroke(null);
                selectedText = null;
            }

            selectedText = company;
            //   selectedText.stroke('red');
            layer.batchDraw();
        });
        phone.on('click', () => {
            if (selectedText === phone) return;

            if (selectedText) {
                selectedText.stroke(null);
                selectedText = null;
            }

            selectedText = phone;
            //   selectedText.stroke('red');
            layer.batchDraw();
        });
        texttransformer.on('transform', () => {
            if (selectedText) {
                selectedText.stroke(null);
                selectedText = null;
                layer.batchDraw();
            }
        });
        //change text color
        $(".line_upper").colorPick({
            'initialColor': 'black',
            'allowRecent': true,
            'recentMax': 5,
            'allowCustomColor': false,
            'palette': ["#1abc9c", "#16a085", "#2ecc71", "#27ae60", "#3498db", "#2980b9", "#9b59b6", "#8e44ad",
                "#34495e", "#2c3e50", "#f1c40f", "#f39c12", "#e67e22", "#d35400", "#e74c3c", "#c0392b",
                "#ecf0f1",
                "#bdc3c7", "#95a5a6", "#7f8c8d", '#000000', '#ffffff', '#d12229', '#393939'
            ],
            'onColorSelected': function() {
                document.getElementById("line_upper").style.background = this.color;
                selectedText.fill(this.color);
                // document.getElementById("upper_color").style.background = this.color;

            }
        });
        //update font
        // function updateFont() {
        //     var font = document.getElementById("font").value;
        //     selectedText.fontFamily(font);
        //     layer.batchDraw();
        // }
        function updateFontFamily(selectElement) {
            var selectedFont = selectElement.value;
            selectElement.style.fontFamily = selectedFont;
            selectedText.fontFamily(selectedFont);
            layer.batchDraw();
        }
        //click outside to remove selection
        out_side = document.getElementById('out_side');
        out_side.addEventListener('click', () => {
            //   alert('hello');
            texttransformer.detach();
            if (selectedText) {
                selectedText.stroke(null);
                selectedText = null;
                layer.batchDraw();
            }
            layer.batchDraw();
        });
        //download image
        var canvas = document.getElementById("canvas-container");
        var download = document.getElementById("download");
        download.addEventListener("click", function() {
            var node = document.getElementById('canvas-container');
            domtoimage.toPng(node)
                .then(function(dataUrl) {
                    var link = document.createElement('a');
                    link.download = 'Your_vCard.png';
                    link.href = dataUrl;
                    link.click();
                });
        });
        var resetButton = document.getElementById("reset");
        resetButton.addEventListener("click", function() {
            location.reload();
        });
    </script>
@endsection
