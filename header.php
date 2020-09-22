<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <title>Kobir Tuitorial | Fee</title>
    </head>
    
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            font-family: 'Poppins', sans-serif;
            background: -webkit-linear-gradient(to left, #8e9eab, #eef2f3);
            background: linear-gradient(to left, #43cea2, #185a9d);
        }
        /* .show{
            display: none;
        } */
        nav{
            margin: 0 5rem;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-radius: 5px;
            background: linear-gradient(to left, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0.15));
            backdrop-filter: blur(5px);
        }
        
        .right a, .left a{
            padding: 0.25rem;
            margin: 0 1.5rem;
            text-decoration: none;
            color: black;
            transition: 0.2s all ease;
        }
        .right a:hover{
           border-radius: 5px;
           background: linear-gradient(to left, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0.15));
           backdrop-filter: blur(5px);
           
        }
        footer{
            margin: 0 5rem;
            border-radius: 5px;
            background: linear-gradient(to left, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0.15));
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center
        }
        footer h4, footer p{
            margin: 0;
            padding: 0.25rem;
        }
        .form-container{
            max-width: 35rem;
            border-radius: 15px;
            background: rgb(226, 226, 226);
            margin: 0.5rem auto;
        }
        .form-wrap{
            max-width: 30rem;
            margin: 0.5rem auto;
            align-items: center;
            border-radius: 10px;
            background: linear-gradient(to left, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0.15));
            display: flex;
            flex-direction: column;
        }
        .main-form{
            min-width: 20rem;
            padding: .5rem 0;
            display: flex;
            flex-direction: column;
            /* align-items: center; */
        }
        .main-form input,.main-form label, .main-form select, .main-form select option {
            font-size: 1.5rem;
            
        }
        .main-form input, .main-form select{
            margin: 0 0 .75rem;
        }
        .btn-div{
            display: flex;
            justify-content: space-between;
        }
        .btn-div .btn{
            min-width: 5rem;
            padding: .5rem;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: .5s all ease;
        }
        .btn-div .btn:hover{
            background: linear-gradient(to left, rgba(255, 255, 255, 0.55), rgba(255, 255, 255, 0.55));
            backdrop-filter: blur(15px);
        }
        .printable{
            display: none;
        }
        .print{
            background: rgb(31, 253, 142);   
        }
        .btn-div .print:hover{
            color: white;
            background: rgb(4, 97, 85);
        }
        .red-text{
            color: rgb(255, 0, 0); 
        }
        
        @media print{
            .printable{
                background: rgb(226, 226, 226);
                max-width: 25%;
                /* margin: 0.75rem; */
                display: flex;
                flex-direction: column;
                align-items: center;
        }
        .ofice-copy, .student-copy{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .foot{
            margin-right:auto ;
            font-size: .75rem;
        }
        .table-info{
            font-size: .85rem;
        }
        .copyright {
            text-align: center;
            margin: .5rem 0 0 0;
            font-size: .6rem;
        }
        .address p{
            font-size: 0.6rem;
            text-align: center;
        }
        .show, footer{
            display: none;
        }
        }
    </style>
    
    <body>
        

        <!-- Visible Part Starts Here -->

        <div class="show">
            <nav>
                <div class="left">
                    <h2><a href="index.php">Kobir Tuitorial</a></h2>
                </div>
                <div class="right">
                    <a href="index.php">Home</a>
                    <a href="#">ICT Batch</a>
                    <a href="#">Student List</a>
                    <a href="fee_state.php">Fee Statements</a>
                    <a href="signup.php">Add student</a>
                </div>
            </nav>