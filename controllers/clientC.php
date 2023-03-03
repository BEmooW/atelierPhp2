<?php
class clientC{
    public function show($client){
        echo '<table border="1">
        <thead>
        <th>last name</th>
        <th>first name</th>
        <th>password</th>
        <th>phone</th>
        <th>address</th>
        <th>dob</th>
        </thead>
        <tbody>
        <tr>
        <td>'.$client->lastname.'</td>
        <td>'.$client->firstname.'</td>
        <td>'.$client->password.'</td>
        <td>'.$client->phone.'</td>
        <td>'.$client->address.'</td>
        <td>'.$client->dob->format('Y-m-d').'</td>
        </tr>
        </tbody>
        </table>';
    }
      

}
?>