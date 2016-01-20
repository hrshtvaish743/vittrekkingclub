                            $("#event_report").append("hlfjklflklfnbkjfnbkjfnbkjfnbkjfnbkjfnbkjfnbkj");
                            var connection = new ActiveXObject("ADODB.Connection") ;
                            var connectionstring="Data Source=mysql.hostinger.in;Initial Catalog=u828621389_trek;User ID=u828621389_trek;Password=mydatabase;Provider=SQLOLEDB";
                            connection.Open(connectionstring);
                            var rs = new ActiveXObject("ADODB.Recordset");
                            rs.Open("SELECT * FROM events", connection);
                            rs.MoveFirst
                            $("#event_report").append("hlfjklflklfnbkjfnbkjfnbkjfnbkjfnbkjfnbkjfnbkj");
                            while(!rs.eof)
                            {
                                $("#event_report").(rs.fields(1));
                                rs.movenext;
                            }
                            rs.close;
                            connection.close;