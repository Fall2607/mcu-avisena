<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/img/') ?>apple-icon.png">
    <link rel="icon" type="image/png" href="<?= base_url('assets/img/') ?>favicon.png">
    <title>
        MCU | RSU Avisena
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="<?= base_url('assets/css/') ?>nucleo-icons.css" rel="stylesheet" />
    <link href="<?= base_url('assets/css/') ?>nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/40a15f19eb.js" crossorigin="anonymous"></script>
    <link href="<?= base_url('assets/css/') ?>nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="<?= base_url('assets/css/') ?>argon-dashboard.css?v=2.0.4" rel="stylesheet" />
    <link href="<?= base_url('assets/css/') ?>vanilla.css" rel="stylesheet" />
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/') ?>datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/plugins/') ?>datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/plugins/') ?>datatables-buttons/css/buttons.bootstrap4.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <style>
    .act-bt{
        width:32px; 
        height:32px; 
        display:inline-flex; 
        align-items:center; 
        justify-content:center;
    }
    .sidenav {
        z-index: 1000!important ;
    }
    </style>

</head>

<body class="g-sidenav-show   bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <!-- ======= Sidebar ======= -->
    <?= $this->include('templates/sidebar'); ?>

    <!-- Content -->
    <?= $this->renderSection('page-content'); ?>
    <!-- End Content -->
     
    <!-- jQuery -->
    <script src="<?= base_url('assets/plugins/') ?>jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?= base_url('assets/plugins/') ?>jquery-ui/jquery-ui.min.js"></script>
    <!--   Core JS Files   -->
    <script src="<?= base_url('assets/js/') ?>core/popper.min.js"></script>
    <script src="<?= base_url('assets/js/') ?>core/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/js/') ?>plugins/perfect-scrollbar.min.js"></script>
    <script src="<?= base_url('assets/js/') ?>plugins/smooth-scrollbar.min.js"></script>
    <script src="<?= base_url('assets/js/') ?>plugins/chartjs.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="<?= base_url('assets/plugins/') ?>datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assets/plugins/') ?>datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url('assets/plugins/') ?>datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url('assets/plugins/') ?>datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url('assets/plugins/') ?>datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url('assets/plugins/') ?>datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url('assets/plugins/') ?>jszip/jszip.min.js"></script>
    <script src="<?= base_url('assets/plugins/') ?>pdfmake/pdfmake.min.js"></script>
    <script src="<?= base_url('assets/plugins/') ?>pdfmake/vfs_fonts.js"></script>
    <script src="<?= base_url('assets/plugins/') ?>datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url('assets/plugins/') ?>datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url('assets/plugins/') ?>datatables-buttons/js/buttons.colVis.min.js"></script>
    <script>
        $(function() {
            $("#tableMain").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#tableMain_wrapper .col-md-6:eq(0)');
        })
    </script>

    <script>
        var ctx1 = document.getElementById("chart-line").getContext("2d");

        var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

        gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
        gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
        gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
        new Chart(ctx1, {
            type: "line",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Mobile apps",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#5e72e4",
                    backgroundColor: gradientStroke1,
                    borderWidth: 3,
                    fill: true,
                    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                    maxBarThickness: 6

                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#fbfbfb',
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#ccc',
                            padding: 20,
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });
    </script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?= base_url('assets/js/') ?>argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>