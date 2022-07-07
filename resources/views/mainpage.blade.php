<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>mainpage</title>
</head>
<body>
@if (session('save'))
    <script>
        alert("Success");
    </script>
    @endif
    @if (session('error'))
    <script>
        alert("Failed");
    </script>
    @endif

    <div class="w3-bar w3-yellow ">
     <a class="w3-bar-item w3-button w3-right" href="{{ url('logout') }}"> Logout</a>
    </div>

    <header class="w3-center w3-padding-large w3-yellow">
        <h2>Subjects List</h2>
    </header>
    <div class="w3-bar">
        <button class="w3-button w3-round w3-right w3-yellow w3-margin" onclick="document.getElementById('newsubject').style.display= 'block';return false;">New Subject</button>
    </div>

    <div class="w3-padding" style='max-width:1200px;margin:auto;overflow-x:auto;'>
        <table class="w3-table w3-striped w3-bordered">
            <thead>
                <th class = "w3-center">ID</th>
                <th class = "w3-center">Subject Name</th>
                <th class = "w3-center">Subject Price</th>
                <th class = "w3-center">Learning Hours</th>
                <th class = "w3-center">Description</th>
            </thead>
            @foreach ($subjectItems  as $listSubject)
            <tr>
                <td class = "w3-center">{{ $listSubject->id}}</td>
                <td class = "w3-left">{{ $listSubject->subject_title}}</td>
                <td class = "w3-center">{{ $listSubject->subject_price}}</td>
                <td class = "w3-center">{{ $listSubject->subject_learning_hours}}</td>
                <td class = "w3-left">{{ $listSubject->subject_description}}</td>
                <td>

                </td>
            </tr>
            @endforeach


        </table>
    </div>
    <div id="newsubject" class="w3-modal w3-animate-opacity">
        <div class="w3-modal-content w3-round" style="width:500px">
            <header class="w3-row w3-yellow"> <span onclick="document.getElementById('newsubject').style.display='none'" class="w3-button w3-display-topright w3-small">&times;</span>
                <h4 class="w3-margin-left">New Subject Form</h4>
            </header>
            <div class="w3-padding">
                <form method="post" action="{{route('saveSubject')}}">
                    {{csrf_field()}}
                    <p>
                        <label for="name">Name:</label>
                        <input class="w3-input w3-round w3-border" type="text" name="sub_title">
                    </p>
                    <p>
                        <label for="name">Price:</label>
                        <input class="w3-input w3-round w3-border" type="number" name="sub_price" step="any">
                    </p>
                    <p>
                        <label for="name">Learning hours:</label>
                        <input class="w3-input w3-round w3-border" type="number" name="sub_learn_hours" step="1">
                    </p>
                    <p>
                        <label for="name">Description:</label>
                        <textarea class="w3-input w3-round w3-border" type="text" name="sub_descrip"></textarea>
                    </p>
                    <p class="w3-center"><button class="w3-button w3-yellow w3-round" type="submit">Add</button></p>
                </form>
            </div>
        </div>
    </div>
    
    <div class="w3-bottom"><footer class="w3-footer w3-center w3-yellow">MyTutor App&copy;</footer></div>
</body>
</html>