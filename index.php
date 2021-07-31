<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Calendar</title>
</head>
<body>
    <div class="m-5 p-2 border radius">
        <form class="input-group" method="GET" accept="/">
                <span class="input-group-text">Choose month </span>
                <input type="month" class="form-control" name="month" required>
                <input type="submit" class="btn btn-success" value="Confirm">
        </form>

        <div class="container-fluid border">
            <div class="row">
                <div class="col p-0">
                    <div class="text-center border m-1 p-1">
                        12
                    </div>
                </div>
                <div class="col p-0">
                    <div class="text-center border m-1 p-1">
                        12
                    </div>
                </div>
                <div class="col p-0">
                    <div class="text-center border m-1 p-1">
                        12
                    </div>
                </div>
                <div class="col p-0">
                    <div class="text-center border m-1 p-1">
                        12
                    </div>
                </div>
                <div class="col p-0">
                    <div class="text-center border m-1 p-1">
                        12
                    </div>
                </div>
                <div class="col p-0">
                    <div class="text-center border m-1 p-1">
                        12
                    </div>
                </div>
                <div class="col p-0">
                    <div class="text-center border m-1 p-1">
                        12
                    </div>
                </div>
            </div>
        </div>
        <?php
            function PrintCalendar($month) {
                if ($month > 12 || $month < 1 || $year < 0) {
                    return;
                }

                $months = array(
                    1  => 'Январь',
                    2  => 'Февраль',
                    3  => 'Март',
                    4  => 'Апрель',
                    5  => 'Май',
                    6  => 'Июнь',
                    7  => 'Июль',
                    8  => 'Август',
                    9  => 'Сентябрь',
                    10 => 'Октябрь',
                    11 => 'Ноябрь',
                    12 => 'Декабрь'
                );

                $month = intval($month);

                
                return;
            }

            PrintCalendar(7);
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>