<html>
<head>
    <title>Employee Records and Payroll System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="bg-gray-100 p-4">
    <div class="max-w-7xl mx-auto bg-white p-4 rounded shadow">
        <!-- Employee Records Section -->
        <div class="mb-6">
            <button class="bg-blue-500 text-white px-4 py-2 rounded mb-4 flex items-center">
                <i class="fas fa-user-plus mr-2"></i> Add Employee Records
            </button>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 border">Show 
                                <select class="border rounded ml-2">
                                    <option>10</option>
                                    <option>25</option>
                                    <option>50</option>
                                    <option>100</option>
                                </select> entries
                            </th>
                            <th colspan="6" class="px-4 py-2 border text-center">Employee Records</th>
                            <th class="px-4 py-2 border">
                                Search: <input type="text" class="border rounded ml-2">
                            </th>
                        </tr>
                        <tr>
                            <th class="px-4 py-2 border">Fullname</th>
                            <th class="px-4 py-2 border">Contact</th>
                            <th class="px-4 py-2 border">Email</th>
                            <th class="px-4 py-2 border">Gender</th>
                            <th class="px-4 py-2 border">Employee Type</th>
                            <th class="px-4 py-2 border">Department</th>
                            <th class="px-4 py-2 border">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $employees = [
                            ['fullname' => 'Agnes Miller', 'contact' => '2450001695', 'email' => 'milleragnes@gmail.com', 'gender' => 'F', 'type' => 'Casual', 'department' => 'Finance'],
                            ['fullname' => 'Christen Miller', 'contact' => '5214570002', 'email' => 'christen@gmail.com', 'gender' => 'F', 'type' => 'Casual', 'department' => 'Maintenance'],
                            ['fullname' => 'Ireen Payne', 'contact' => '1245875450', 'email' => 'payne@gmail.com', 'gender' => 'M', 'type' => 'Part-Time', 'department' => 'Marketing']
                        ];

                        foreach ($employees as $employee) {
                            echo "<tr>
                                <td class='px-4 py-2 border'>{$employee['fullname']}</td>
                                <td class='px-4 py-2 border'>{$employee['contact']}</td>
                                <td class='px-4 py-2 border'>{$employee['email']}</td>
                                <td class='px-4 py-2 border text-center'><i class='fas fa-" . ($employee['gender'] == 'F' ? 'female' : 'male') . " text-red-500'></i> {$employee['gender']}</td>
                                <td class='px-4 py-2 border text-center'><span class='bg-" . ($employee['type'] == 'Casual' ? 'green' : 'yellow') . "-500 text-white px-2 py-1 rounded'>{$employee['type']}</span></td>
                                <td class='px-4 py-2 border'>{$employee['department']}</td>
                                <td class='px-4 py-2 border text-center'>
                                    <button class='bg-yellow-500 text-white px-2 py-1 rounded'><i class='fas fa-edit'></i></button>
                                    <button class='bg-red-500 text-white px-2 py-1 rounded'><i class='fas fa-trash'></i></button>
                                </td>
                            </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Payroll System Section -->
        <div class="mb-6">
            <div class="flex items-center mb-4">
                <i class="fas fa-money-check-alt text-green-500 text-2xl mr-2"></i>
                <h2 class="text-2xl font-bold text-green-500">Payroll System</h2>
            </div>
            <div class="flex mb-4">
                <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded-l">Employee Section <span class="bg-blue-500 text-white px-2 py-1 rounded-full ml-2">7</span></button>
                <button class="bg-gray-200 text-gray-700 px-4 py-2">Manage Deductions</button>
                <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded-r">Payroll Section</button>
                <button class="bg-red-500 text-white px-4 py-2 rounded ml-auto"><i class="fas fa-sign-out-alt"></i> Exit</button>
            </div>
            <div class="flex mb-4">
                <button class="bg-yellow-500 text-white px-4 py-2 rounded mr-2 flex items-center">
                    <i class="fas fa-hourglass-half mr-2"></i> Update Overtime Rate
                </button>
                <button class="bg-blue-500 text-white px-4 py-2 rounded flex items-center">
                    <i class="fas fa-money-bill-wave mr-2"></i> Update Salary Rate
                </button>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 border">Show 
                                <select class="border rounded ml-2">
                                    <option>10</option>
                                    <option>25</option>
                                    <option>50</option>
                                    <option>100</option>
                                </select> entries
                            </th>
                            <th colspan="6" class="px-4 py-2 border text-center"></th>
                            <th class="px-4 py-2 border">
                                Search: <input type="text" class="border rounded ml-2">
                            </th>
                        </tr>
                        <tr>
                            <th class="px-4 py-2 border">Fullname</th>
                            <th class="px-4 py-2 border">Overtime</th>
                            <th class="px-4 py-2 border">Bonus</th>
                            <th class="px-4 py-2 border">Deductions</th>
                            <th class="px-4 py-2 border">Net Pay</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $payrolls = [
                            ['fullname' => 'Agnes Miller', 'overtime' => '16 hrs', 'bonus' => '1350.00', 'deductions' => '1499.00', 'netpay' => 'Rs.40911.00'],
                            ['fullname' => 'Christen Miller', 'overtime' => '20 hrs', 'bonus' => '2100.00', 'deductions' => '2000.00', 'netpay' => 'Rs.45000.00'],
                            ['fullname' => 'Ireen Payne', 'overtime' => '10 hrs', 'bonus' => '1000.00', 'deductions' => '1200.00', 'netpay' => 'Rs.38000.00']
                        ];

                        foreach ($payrolls as $payroll) {
                            echo "<tr>
                                <td class='px-4 py-2 border'>{$payroll['fullname']}</td>
                                <td class='px-4 py-2 border'>{$payroll['overtime']}</td>
                                <td class='px-4 py-2 border'>{$payroll['bonus']}</td>
                                <td class='px-4 py-2 border'>{$payroll['deductions']}</td>
                                <td class='px-4 py-2 border'>{$payroll['netpay']}</td>
                            </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                <p>Overtime Rate (Per Hour): <span class="font-bold">285.00</span></p>
                <p>Salary Rate: <span class="font-bold">36500.00</span></p>
            </div>
        </div>
    </div>
</body>
</html>