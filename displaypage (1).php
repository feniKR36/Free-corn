<!DOCTYPE html>
<html>

<head>
    <title>4k Cornball</title>
    <link rel="stylesheet" href="cornballl.css">
</head>

<body style="background-color:yellow; text-align:center; font-family:Arial;">

    <h1>FREE, AS IN FREE CORN 4 EVERY1</h1>
    <p>2tally normal website. def just corn.</p>
    <p>enter deets to claim if u want</p>


    <form method="POST" action="process.php">

        <br>

        <label>Enter Your Name:</label><br>
        <input type="text" name="username" required>

        <br><br>

        <label>Enter Your Birthday:</label><br><br>

        <!-- Month Dropdown logic and binary conversion guide
            1	0001    jan
            2	0010    feb   
            3	0011    mar 
            4	0100    apr
            5	0101    may
            6	0110    jun
            7	0111    jul
            8	1000    aug
            9	1001    sep
            10	1010    oct
            11	1011    nov
            12	1100    dec
            -->

        <select name="month" required>
            <option value="" disabled selected hidden>Month</option>
            <option value="February">0010</option>
            <option value="April">0100</option>
            <option value="September">1001</option>
            <option value="August">1000</option>
            <option value="December">1100</option>
            <option value="January">0001</option>
            <option value="July">0111</option>
            <option value="October">1010</option>
            <option value="March">0011</option>
            <option value="May">0101</option>
            <option value="November">1011</option>
            <option value="June">0110</option>
        </select>


        <select name="day" required>
            <option value="" disabled selected hidden>Day</option>
            <?php
            for ($i = 1; $i <= 31; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>


        <select name="year" required>
            <option value="" disabled selected hidden>Year</option>
            <?php
            for ($i = 1950; $i <= 2026; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>

        <br><br>

        <button type="submit"
            style="background-color:green; color:white; padding:12px 25px; border:none; border-radius:8px; cursor:pointer;">
            i want the corn, gimme it
        </button>

        <br><br>

        <button type="submit" onclick="rageQuit(event)"
            style="background-color:red; color:white; padding:12px 25px; border:none; border-radius:8px; cursor:pointer;">
            I DON'T LIKE CORN
        </button>

        <script>
            function rageQuit(event) {

                var form = document.querySelector('form');


                if (form.checkValidity()) {

                    event.preventDefault();


                    window.close();


                    document.body.innerHTML = "<h1 style='color:white; margin-top:20%; font-family:Arial;'>ragequiting? skill issue.</h1>";

                    document.body.style.backgroundColor = "black";
                }

            }
        </script>
    </form>
    <br>
    <button type="submit"
        style="background-color:blue; color:white; padding:12px 30px; border:none; border-radius:8px; cursor:pointer;">
        i want the corn, gimme it
    </button>

    <img id="corn" src="Cornball2.png" alt="Corn">

</body>


</html>