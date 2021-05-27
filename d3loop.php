<?php
echo"<table>";
for($i=0;$i<1000;$i++)
{
    echo "<tr>";
    if($i%2==0)
    {
        echo "<td bgcolor='red'>$i</td>";
    }
    {
        echo "<td bgcolor='yellow'>$i</td>";
    }
    echo"</tr>";
    
}
echo "</table>";
