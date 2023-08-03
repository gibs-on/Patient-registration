<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


</head>

<body class="antialiased">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1>Patient Registration Form</h1>
                <form action="{{ route('patients.store') }}" method="post">
                    @csrf

                    <!-- Patient Details -->
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="dob">Date of Birth:</label>
                        <input type="date" name="dob" id="dob" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="id_number">ID Number:</label>
                        <input type="text" name="id_number" id="id_number" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="address">Address:</label>
                        <input type="text" name="address" id="address" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="county">County:</label>
                        <input type="text" name="county" id="county" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="sub_county">Sub County:</label>
                        <input type="text" name="sub_county" id="sub_county" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="telephone">Telephone:</label>
                        <input type="text" name="telephone" id="telephone" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="gender">Gender:</label>
                        <select name="gender" id="gender" class="form-control" required>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="marital_status">Marital Status:</label>
                        <select name="marital_status" id="marital_status" class="form-control" required>
                            <option value="single">Single</option>
                            <option value="married">Married</option>
                            <option value="divorced">Divorced</option>
                            <option value="widowed">Widowed</option>
                        </select>
                    </div>

                    <!-- Next of Kin Details -->
                    <h3>Next of Kin</h3>

                    <div class="form-group">
                        <label for="next_of_kin_name">Name:</label>
                        <input type="text" name="next_of_kin_name" id="next_of_kin_name" class="form-control"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="next_of_kin_dob">Date of Birth:</label>
                        <input type="date" name="next_of_kin_dob" id="next_of_kin_dob" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="next_of_kin_id_number">ID Number:</label>
                        <input type="text" name="next_of_kin_id_number" id="next_of_kin_id_number"
                            class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="next_of_kin_gender">Gender:</label>
                        <select name="next_of_kin_gender" id="next_of_kin_gender" class="form-control" required>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="next_of_kin_relationship">Relationship:</label>
                        <input type="text" name="next_of_kin_relationship" id="next_of_kin_relationship"
                            class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="next_of_kin_telephone">Telephone:</label>
                        <input type="text" name="next_of_kin_telephone" id="next_of_kin_telephone"
                            class="form-control" required>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </form>
            </div>


        </div>
    </div>
</body>

</html>
