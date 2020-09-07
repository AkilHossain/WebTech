<!DOCTYPE html>
<html>
<head>
    <title>Person Profile</title>
</head>
<body>
    <form>
        <table border= "1">
            <tr>
                <td colspan="3"><center><h3>PERSON PROFILE</h3></center></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" id="name" onkeyup="nameValidation()"></td>
                <td width="20px"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" id="email"></td>
                <td></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><input type="radio" name="gender" id="gender">Male
                    <input type="radio" name="gender" id="gender">Female
                    <input type="radio" name="gender" id="gender">Other</td>
                <td></td>
            </tr>
            <tr>
                <td>Date Of Birth</td>
                <td><input type="number" maxlength="2" size="1" id="day">/
                    <input type="number" maxlength="2" size="1" id="month">/
                    <input type="number" maxlength="4" size="1" id="year"> <i>(dd/mm/yyyy)</i></td>
                <td></td>
            </tr>
            <tr>
                <td>Blood Group</td>
                <td>
                    <Select id="bloodGroup">
                        <option>SELECT</option>
                        <option>A+</option>
                        <option>A-</option>
                        <option>B+</option>
                        <option>B-</option>
                        <option>O+</option>
                        <option>O-</option>
                        <option>AB+</option>
                        <option>AB-</option>
                    </Select>
                </td>
                <td></td>
            </tr>
            <tr>
                <td>Degree</td>
                <td >
                    <input type="checkbox" name="degree">SSC
                    <input type="checkbox" name="degree">HSC
                    <input type="checkbox" name="degree">BSc.
                    <input type="checkbox" name="degree">MSc.
                </td>
                <td></td>
            </tr>
            <tr>
                <td>Photo</td>
                <td colspan="2"><input type="file" id="file"></td>
            </tr>
            <tr>
                <td colspan="3" height="25px"></td>
            </tr>
            <tr>
                <td colspan="3" align="right">
                    <button type="button" onclick="validates()">Submit</Button>
                    <button type="reset">Reset</button>
                </td>
            </tr>

        </table>
    </form>
    
    <script>
        function nameValidation() {
            var name = document.getElementById("name").value;
            if (name == "") {
                alert("name cannot be empty");
            }
        }
        function emailValidation() {
            var email = document.getElementById("email").value;
            if (email == "") {
                alert("email cannot be empty");
            }
            else if (!email.includes("@") || !email.includes(".com") || email.indexOf("@") > email.indexOf(".com")) {
                alert("please enter a valid email");
            }
        }
        function genderValidation() {
            var gender = document.getElementsByName("gender");
            if (gender[0].checked == false && gender[1].checked == false && gender[2].checked == false) {
                alert("please select a gender");
            }
        }
        function dobValidation() {
            var day = document.getElementById("day").value;
            var month = document.getElementById("month").value;
            var year = document.getElementById("year").value;
            if (day == "" || month == "" || year == "") {
                alert("incomplete date of birth");
            }
        }
        function bloodGroupValidation() {
            var bloodGroup = document.getElementById("bloodGroup").value;
            if (bloodGroup == "SELECT") {
                alert("please select a blood group");
            }
        }
        function degreeValidation() {
            var degree = document.getElementsByName("degree");
            if (degree[0].checked == false && degree[1].checked == false && degree[2].checked == false && degree[3].checked == false) {
                alert("please select a degree");
            }
        }
        function fileValidation() {
            var file = document.getElementById("file").value;
            if (file == "") {
                alert("please select a file");
            }
        }
        function validates() {
             nameValidation();
             emailValidation();
            genderValidation();
             dobValidation();
             bloodGroupValidation();
             degreeValidation();
             fileValidation();

        }
    </script>


</body>
</html>