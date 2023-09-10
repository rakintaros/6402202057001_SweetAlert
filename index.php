<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sweet 1</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

</head>

<body>
    <div class="container p-5 bg-warning mt-2 mb-2" style="text-align: center;">
        <h1>Sweet Alert 1 : A basic message</h1>
        <h2>อภิรักษ์ อินทารส</h2>
    </div>

    <div class="container">
        <!-- button.btn.btn.info -->
        <button class="btn" style="background-color: #3b3b;" onclick="sw0()">A basic message</button>
        <div>
            <button class="btn btn-danger mt-2" onclick="sw1()">1.A title with a text under</button>
        </div>
        <div>
            <button class="btn mt-2" style="background-color: #2f2d;" onclick=" sw2()">A modal with a title, an error icon, a text, and a footer</button>
        </div>
        <div>
            <button class="btn mt-2" style="background-color: #669999;" onclick=" sw3()">A dialog with three buttons</button>
        </div>
        <div>
            <button class="btn mt-2" style="background-color: #33FFFF;" onclick=" sw4()">A custom positioned dialog</button>
        </div>
        <div>
            <button class="btn mt-2" style="background-color: #33FFDE;" onclick=" sw5()">Sweet</button>
        </div>
        <div>
            <button class="btn mt-2" style="background-color: #98F;" onclick=" sw6()">A message with auto close timer</button>
        </div>
        <div>
            <button class="btn mt-2" style="background-color: #98DF;" onclick=" sw8()">Sweet Image</button>
        </div>

    </div>

    <script>
        function sw0() {
            Swal.fire('Hello Mr.Apirak Intaros');
        }

        function sw1() {
            Swal.fire('Apirak Intaros',
                'That thing is still around?',
                'warning'
            )
        }

        function sw2() {
            Swal.fire({
                icon: 'question',
                title: 'Oops...',
                text: 'Something went wrong!',
                footer: '<a href="https://www.youtube.com/watch?v=3Iv6Yo1aZx0">Groovy Hip-Hop Mix</a>'
            })
        }

        function sw3() {
            Swal.fire({
                title: 'Do you want to save the changes?',
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: 'Save',
                denyButtonText: `Don't save`,
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    Swal.fire('Apirak Intaros', '', 'error')
                } else if (result.isDenied) {
                    Swal.fire('Apirak Intaros', '', 'warning')
                }
            })
        }

        function sw4() {
            Swal.fire({
                position: 'top-start',
                icon: 'success',
                title: 'Your work has been saved',
                showConfirmButton: false,
                timer: 1500
            })
        }

        function sw5() {
            Swal.fire({
                title: 'Sweet!',
                text: 'Modal with a custom image.',
                imageUrl: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSV1rARdKWopb7On1bDS5hH5_7bjT7ZH1n1U-Fb-ysCpA&s',
                imageWidth: 'auto',
                imageHeight: 'auto',
                imageAlt: 'Custom image',
            })
        }

        function sw6() {
            let timerInterval
            Swal.fire({
                title: 'Auto close alert!',
                html: 'I will close in <b></b> milliseconds.',
                timer: 5000,
                timerProgressBar: true,
                didOpen: () => {
                    Swal.showLoading()
                    const b = Swal.getHtmlContainer().querySelector('b')
                    timerInterval = setInterval(() => {
                        b.textContent = Swal.getTimerLeft()
                    }, 100)
                },
                willClose: () => {
                    clearInterval(timerInterval)
                }
            }).then((result) => {
                /* Read more about handling dismissals below */
                if (result.dismiss === Swal.DismissReason.timer) {
                    console.log('I was closed by the timer')
                }
            })
        }

        function sw7() {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sweet Image'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        imageUrl: 'https://i2-prod.birminghammail.co.uk/incoming/article26616919.ece/ALTERNATES/s1200c/0_GettyImages-1476731831.jpg',
                        imageWidth: 'auto',
                        imageHeight: 'auto',
                    })
                }
            })
        }

        function sw8() {
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Sweet Image',
                cancelButtonText: 'นับถอยหลัง 5 วินาที',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        imageUrl: 'https://i2-prod.birminghammail.co.uk/incoming/article26616919.ece/ALTERNATES/s1200c/0_GettyImages-1476731831.jpg',
                        imageWidth: 'auto',
                        imageHeight: 'auto',
                    })
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    Swal.fire({
                        title: 'Auto close alert!',
                        html: 'I will close in <b></b> milliseconds.',
                        timer: 5000,
                        timerProgressBar: true,
                        didOpen: () => {
                            Swal.showLoading()
                            const b = Swal.getHtmlContainer().querySelector('b')
                            timerInterval = setInterval(() => {
                                b.textContent = Swal.getTimerLeft()
                            }, 100)
                        },
                        willClose: () => {
                            clearInterval(timerInterval)
                        }
                    })
                }
            })
        }
    </script>
</body>

</html>