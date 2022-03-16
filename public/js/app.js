
function addStudent()
{
    var date=document.sample.appointment_date.value;
    var name=document.sample.name.value;
    var fee=document.sample.fee.value;

    var tr = document.createElement('tr');

    var td1 = tr.appendChild(document.createElement('td'));
    var td2 = tr.appendChild(document.createElement('td'));
    var td3 = tr.appendChild(document.createElement('td'));
    var td4 = tr.appendChild(document.createElement('td'));


    td1.innerHTML=date;
    td2.innerHTML=name;
    td3.innerHTML = fee;
    td3.innerHTML='<input type="button" name="del" value="Delete" onclick="delStudent(this);" class="btn btn-danger">'


    document.getElementById("tbl").appendChild(tr);
}
