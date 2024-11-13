<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Add jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Add Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        // Konami Code: Up, Up, Down, Down, Left, Right, Left, Right, B, A
const konamiCode = [38, 38, 40, 40, 37, 39, 37, 39, 66, 65];
let konamiIndex = 0;

document.addEventListener('keydown', (e) => {
    if (e.keyCode === konamiCode[konamiIndex]) {
        konamiIndex++;
        if (konamiIndex === konamiCode.length) {
            randomEffect(); // Activate a random effect
            konamiIndex = 0; // Reset the index
        }
    } else {
        konamiIndex = 0; // Reset if the sequence is incorrect
    }
});

function randomEffect() {
    const effects = [activateFireworksEffect, activateFireworksEffect];
    const effect = effects[Math.floor(Math.random() * effects.length)];
    effect();
}

function activateSnowEffect() {
    const flakeCount = 50;
    const minSize = 10;
    const maxSize = 20;

    for (let i = 0; i < flakeCount; i++) {
        const snowflake = document.createElement('div');
        snowflake.classList.add('snowflake');
        document.body.appendChild(snowflake);

        const size = Math.random() * (maxSize - minSize) + minSize;
        const position = Math.random() * window.innerWidth;

        Object.assign(snowflake.style, {
            position: 'absolute',
            top: '-50px',
            left: `${position}px`,
            width: `${size}px`,
            height: `${size}px`,
            backgroundImage: 'url(https://upload.wikimedia.org/wikipedia/commons/7/74/Snowflake-black.png)',
            backgroundSize: 'contain',
            backgroundRepeat: 'no-repeat',
            opacity: Math.random(),
            animationName: 'fall',
            animationDuration: `${Math.random() * 3 + 2}s`,
            animationTimingFunction: 'linear',
            animationIterationCount: 'infinite'
        });
    }

    addKeyframes();
}

function activateFireworksEffect() {
    // Basic fireworks effect (customize as needed)
    for (let i = 0; i < 50; i++) { // 5 fireworks as an example
        createFirework();
    }
}

function createFirework() {
    const firework = document.createElement('div');
    firework.classList.add('firework');
    document.body.appendChild(firework);

    // Random position for the firework
    const x = Math.random() * window.innerWidth;
    const y = Math.random() * window.innerHeight;

    Object.assign(firework.style, {
        position: 'absolute',
        left: `${x}px`,
        top: `${y}px`,
        // Add more styles for the appearance of the firework
    });

    // Add animation for the firework (use CSS keyframes)
    firework.style.animationName = 'explode';
    firework.style.animationDuration = '1s';
    firework.style.animationTimingFunction = 'ease-out';
    firework.style.animationIterationCount = 1;

    firework.addEventListener('animationend', () => {
        firework.remove(); // Remove the firework after the animation
    });
}

// Add CSS for firework keyframes in your stylesheet


function addKeyframes() {
    const style = document.createElement('style');
    style.innerHTML = `
        @keyframes fall {
            to {
                transform: translateY(100vh);
            }
        }
    `;
    document.head.appendChild(style);
}

document.addEventListener('DOMContentLoaded', activateSnowEffect);


console.log("Hello 2");

    </script>
    <style>
        .firework {
    /* Basic style for the firework */
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background-color: red; /* You can change the color */
    opacity: 0;
}

@keyframes explode {
    0% {
        transform: scale(0.1);
        opacity: 0.7;
    }
    50% {
        transform: scale(1);
        opacity: 1;
    }
    100% {
        transform: scale(0.5);
        opacity: 0;
    }
}

.firework {
    animation-name: explode;
    animation-duration: 1s;
    animation-timing-function: ease-out;
    animation-iteration-count: 1;
}

        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-image: url(https://w.forfun.com/fetch/ee/ee26dddc94efa54b68bccf9b53687290.jpeg);
            display: flex;
  align-items: center;
  flex-direction: column;
  padding-top: 2rem;
  padding-bottom: 2rem;
  box-sizing: border-box;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  height: 100%;
        }

        h3 {
            color: #cce000;
            text-align: center;
            background-color:  #523352;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        td{
            background-color:  #ff4000;
        }
        th {
            background-color: white;
        }

        a {
            text-decoration: none;
            padding: 5px 10px;
            margin: 2px;
            border-radius: 4px;
        }

        a:hover {
            background-color: #ddd;
        }

        .confirmation {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            background-color: #f2f2f2;
        }

        .confirm-btn {
            background-color: #dc3545;
            color: #fff;
        }

        .confirm-btn:hover {
            background-color: #c82333;
        }

        form {
            margin-top: 20px;
            max-width: 400px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<!-- Your PHP code goes here -->
<?php
require("connect.php");

$sql = "SELECT * FROM hostel";
$result = $conn->query($sql);

?>
<div class="container">
    <a href="home.php" class="btn btn-primary">Home</a>
    <h3>List of Hostel Members</h3>
    <?php if ($result->num_rows > 0) { ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Hostel Id</th>
                    <th>Room Number</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['fname']; ?></td>
                        <td><?php echo $row['lname']; ?></td>
                        <td><?php echo $row['hid']; ?></td>
                        <td><?php echo $row['room']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['mobile']; ?></td>
                        <td>
                            <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-danger">DELETE</a>
                            <a href="update.php?id=<?= $row['id'] ?>" class="btn btn-warning">UPDATE</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } else { ?>
        <p>No records found</p>
    <?php } ?>
</div>
<?php
$conn->close();
?>

</body>
</html>
