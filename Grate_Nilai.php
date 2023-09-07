<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .container {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #0026ff;
            text-align: center;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            background-color: #0026ff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #001ccc;
        }

        #result {
            font-size: 18px;
            font-weight: bold;
            margin-top: 20px;
            text-align: center;
            color: #0026ff;
        }

    </style>
</head>

<body class="body">
    <div class="container">
        <h2>Hitung Nilai Rata-rata</h2>
        <form id="gradeForm">
            <label for="name">Nama:</label>
            <input class="name" type="text" id="name">
            <br>
            <br>

            <label for="course">Mata Kuliah:</label>
            <input type="text" id="course">
            <br>
            <br>

            <label for="grade">Grade:</label>
            <select id="grade">
                <option value="">Pilih Grade</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
            </select>

            <button type="submit">Hitung</button>
        </form>
        <p id="result"></p>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.js"
        integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {
            $("#gradeForm").submit(function (event) {
                var arrayList = null;

                if (arrayList == undefined) {
                    console.log("UNDIFINED");
                } else {
                    console.log("Ini variable arrayList[7] : ",arrayList[7]);
                }
            });
        });
    </script>

    <!-- <script>
        function calculateAverage() {
            const gradeValues = { A: 4, B: 3, C: 2, D: 1, E: 0 };
            const name = document.getElementById("name").value;
            const course = document.getElementById("course").value;
            const selectedGrade = document.getElementById("grade").value;

            if (selectedGrade in gradeValues) {
                const gradeValue = gradeValues[selectedGrade];
                const resultElement = document.getElementById("result");

                const totalGradeValues = gradeValue; // For simplicity, you can extend this for multiple subjects
                const average = totalGradeValues / 1; // Assuming 1 subject for now

                resultElement.innerHTML = `
        Nama: ${name}<br>
        Mata Kuliah: ${course}<br>
        Grade: ${selectedGrade}<br>
        Nilai Rata-rata: ${average.toFixed(2)}
      `;
            }
        }
    </script> -->
</body>

</html>