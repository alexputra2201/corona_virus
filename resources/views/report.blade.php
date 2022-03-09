<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <br>
                <div class="select" style="width:20rem;">
                    <form action="{{url('/')}}" method="get">
                        <div class="form-group">
                            <select name="country" class="form-control select2">
                                <option value="" holder>Pilih Negara</option>
                                @foreach($country as $result)
                                <option value="{{$result}}">{{$result}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" style="width: 20rem;">Cari Data</button>
                        </div>
                </div>

                <div class="card" style="width: 20rem;">
                    <img src="https://journals.sagepub.com/pb-assets/cmscontent/Microsites_SAGE/coronavirus/coronavirus_microsite.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Covid-19</h5>
                        <p class="card-text">Coronavirus disease 2019 (COVID-19) is a contagious disease caused by severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2). The first known case was identified in Wuhan, China, in December 2019.
                            The disease has since spread worldwide, leading to an ongoing pandemic.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-center">
                            <h4> {{$list_data["country"]}}</h4>
                        </li>
                        <li class="list-group-item text-center text-info">
                            <h4>{{$list_data["confirmed"]}}</h4>
                        </li>
                    </ul>
                    <div class="card-body">
                        <table width="100%">
                            <tr>
                                <th>
                                    <h6 class="text-center">Meninggal</h6>
                                </th>
                                <th>
                                    <h6 class="text-center">Sembuh</h6>
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <h4 class="text-danger">{{$list_data["deaths"]}}</h4>
                                </td>
                                <td>
                                    <h4 class="text-success">{{$list_data["recovered"]}}</h4>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="card-footer">
                        <h6> Updated at: {{$list_data["lastUpdate"]}}</h6>
                    </div>
                </div>

            </div>
            <div class="col"></div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


<script>
    $(document).ready(function() {
    $('.select2').select2();
});
</script>

</body>

</html>