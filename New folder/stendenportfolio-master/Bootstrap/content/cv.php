      <div id="page-wrapper">

                <div class="row">
                    <div class="col-lg-12">
                        <h1>CV, Werkervaring en Studie </h1>
                        <ol class="breadcrumb">
                        </ol>
                    </div>
                    <div class="frontendcv">
                        <div class="infocv">
                            <div class="pasfotocv">
                                <img src="img/Pasfoto.jpg" alt="pasfoto">
                            </div>
                        </div>
						<div id="info">
                        <div class="cv">
                            <h2>CV</h2>
                            <?php
                            $DBConnect = mysqli_connect("localhost", "root", "");
                            if ($DBConnect === FALSE)
                            {
                                echo "<p>Unable to connect to the database server.</p>" . "<p>Error code " . mysqli_error() . ": " . mysqli_error() . "</p>";
                            } else
                            {
                                $DBName = "project_portfolio";
                                if (!mysqli_select_db($DBConnect, $DBName))
                                {
                                    echo "<p>Er is geen cv tekst</p>";
                                } else
                                {
                                    $TableName = "Text_CV";
                                    $SQLstring = "SELECT * FROM $TableName";
                                    $QueryResult = mysqli_query($DBConnect, $SQLstring);
                                    if (mysqli_num_rows($QueryResult) == 0)
                                    {
                                        echo "<p>There are no textfields!</p>";
                                    } else
                                    {

                                        while ($Row = mysqli_fetch_assoc($QueryResult))
                                        {
                                            echo "<p>{$Row['Textarea']}</p>";
                                            echo "<p><a href ='cvtext_edit.php?cvID=" . $Row['cvID'] . "'>Edit</a><p>";
                                        }
                                    }
                                    mysqli_free_result($QueryResult);
                                }
                                mysqli_close($DBConnect);
                            }

                           
                            ?> 
                        </div>
                        <div class="we">
                            <h2>Werkervaring</h2>
                              <?php
                            $DBConnect = mysqli_connect("localhost", "root", "");
                            if ($DBConnect === FALSE)
                            {
                                echo "<p>Unable to connect to the database server.</p>" . "<p>Error code " . mysqli_error() . ": " . mysqli_error() . "</p>";
                            } else
                            {
                                $DBName = "project_portfolio";
                                if (!mysqli_select_db($DBConnect, $DBName))
                                {
                                    echo "<p>Er is geen cv tekst</p>";
                                } else
                                {
                                    $TableName = "Text_CV";
                                    $SQLstring = "SELECT * FROM $TableName";
                                    $QueryResult = mysqli_query($DBConnect, $SQLstring);
                                    if (mysqli_num_rows($QueryResult) == 0)
                                    {
                                        echo "<p>There are no textfields!</p>";
                                    } else
                                    {

                                        while ($Row = mysqli_fetch_assoc($QueryResult))
                                        {
                                            echo "<p>{$Row['Werkervaring']}</p>";
                                            echo "<p><a href ='cvwerkervaring_edit.php?cvID=" . $Row['cvID'] . "'>Edit</a><p>";
                                        }
                                    }
                                    mysqli_free_result($QueryResult);
                                }
                                mysqli_close($DBConnect);
                            }

                           
                            ?>
							</div>
							<div class="we">
                            <h2>Studie</h2>
                            <?php
                            $DBConnect = mysqli_connect("localhost", "root", "");
                            if ($DBConnect === FALSE)
                            {
                                echo "<p>Unable to connect to the database server.</p>" . "<p>Error code " . mysqli_error() . ": " . mysqli_error() . "</p>";
                            } else
                            {
                                $DBName = "project_portfolio";
                                if (!mysqli_select_db($DBConnect, $DBName))
                                {
                                    echo "<p>Er is geen cv tekst</p>";
                                } else
                                {
                                    $TableName = "Text_CV";
                                    $SQLstring = "SELECT * FROM $TableName";
                                    $QueryResult = mysqli_query($DBConnect, $SQLstring);
                                    if (mysqli_num_rows($QueryResult) == 0)
                                    {
                                        echo "<p>There are no textfields!</p>";
                                    } else
                                    {

                                        while ($Row = mysqli_fetch_assoc($QueryResult))
                                        {
                                            echo "<p>{$Row['Opleidingen']}</p>";
                                            echo "<p><a href ='cvopleidingen_edit.php?cvID=" . $Row['cvID'] . "'>Edit</a><p>";
                                        }
                                    }
                                    mysqli_free_result($QueryResult);
                                }
                                mysqli_close($DBConnect);
                            }

                           
                            ?>
						</div>
                        </div>
						</div>
                    </div>
                </div><!-- /.row -->

            </div><!-- /#page-wrapper -->