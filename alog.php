<?php
    $name=$_POST['email'];
    $pass=$_POST['password'];
    session_start();
    try
    {
        $conn = new mysqli("localhost","root","","reg");
        if($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }
        else
        {
            $stmt=$conn->prepare("select * from aregister where email=? and pass=?");
            
            $stmt->bind_param("ss",$name,$pass);
            $stmt->execute();
            $stmt->store_result();
            if($stmt->num_rows>0)
            {
                $result=$conn->query("select * from register where email='$name'");
                    if($result->num_rows>0)
                    {
                        while($row=$result->fetch_assoc())
                        {
                            $_SESSION["v1"]=$row['firstname'];
                            $_SESSION["v2"]=$row['lastname'];
                            $_SESSION["v3"]=$row["email"];  
                            $_SESSION["v4"]=$row["user_id"];
                        }
                    }
                ?>
                <script>
                    window.location.href="admin.html";
                </script>
                <?php
                $stmt->close();
                $conn->close();
            }
            else
            {
                $stmt->close();
                $conn->close();
                ?>
                <script>
                    alert("Invalid credentials");
                    window.location.href="alog.html";
                </script>
                <?php
            }
        }
    }
    catch(Exception $e)
    {
        ?>
        <script>
            alert("Invalid credentials");
            window.location.href="alog.html";
        </script>
        <?php
    }

