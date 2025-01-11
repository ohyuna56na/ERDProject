<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataTables Integration with Header</title>
    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <!-- Flowbite CSS -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@1.5.3/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
    <!-- DataTables Libs -->
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.min.js"></script>
    <!-- DataTables Script -->
    <script>
        $(document).ready(function () {
            var table = new DataTable('#tableBio', {
                paging: true,
                searching: true,
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/2.1.8/i18n/id.json', 
                },
            });
        });
    </script>
    <style>
        /* Navbar Styling */
        nav ul {
            display: flex;
            justify-content: space-evenly;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            list-style: none;
        }

        nav ul li a {
            text-decoration: none;
            padding: 8px 12px;
            border-radius: 4px;
            transition: background-color 0.3s ease-in-out;
        }

        nav ul li a:hover {
            background-color: rgba(0, 0, 0, 0.1);
        }

        /* Table Styling */
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            border-radius: 8px;
            overflow: hidden;
        }

        thead th {
            background-color: #333;
            color: #fff;
            text-align: left;
            padding: 12px;
        }

        tbody td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }

        tbody tr:hover {
            background-color: #f2f2f2;
        }

        /* Responsiveness */
        @media (max-width: 768px) {
            nav ul {
                flex-direction: column;
                align-items: center;
            }

            nav ul li {
                margin-bottom: 8px;
            }

            table {
                font-size: 14px;
            }
        }

        main {
            margin-top: 120px; 
        }
    </style>
</head>

<body>
    <header>
        <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo">
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
                </a>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li><a href="/assignments" class="block py-2 px-3">Assignments</a></li>
                    <li><a href="/courses" class="block py-2 px-3">Courses</a></li>
                    <li><a href="/enrollments" class="block py-2 px-3">Enrollments</a></li>
                    <li><a href="/instructors" class="block py-2 px-3">Instructors</a></li>
                    <li><a href="/students" class="block py-2 px-3">Students</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
</body>

</html>
