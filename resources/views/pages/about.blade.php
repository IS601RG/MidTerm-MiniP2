@extends('layouts.default')

@section('content')

    <div class="card-body" style="margin-top: 70px">
        <h1><div style="text-align: center;">Welcome To My About Page</div></h1>
        <p class="lead">Please find details on this page about three different cars in today's leading market.</p>

        <div class="card mt-5 pl-5 pr-20" ><br>
            <div class="container">
                <!-- Example row of columns -->
                <div class="row">
                    <div class="col-md-4">
                        <h2>Ford</h2>
                        <p>Ford Motor Company, is an American multinational automaker headquartered in Dearborn, Michigan, a suburb of Detroit. It was founded by Henry Ford and incorporated on June 16, 1903. The company sells automobiles and commercial vehicles under the Ford brand and most luxury cars under the Lincoln brand.</p>
                        <p><a class="btn btn-secondary" href="https://www.ford.com/" role="button">View details &raquo;</a></p>
                    </div>
                    <div class="col-md-4">
                        <h2>Honda</h2>
                        <p>Honda Motor Company, is a Japanese public multinational conglomerate corporation primarily known as a manufacturer of automobiles, aircraft, motorcycles, and power equipment. Honda was the first Japanese automobile manufacturer to release a dedicated luxury brand, Acura, in 1986. </p>
                        <p><a class="btn btn-secondary" href="https://www.honda.com/" role="button">View details &raquo;</a></p>
                    </div>
                    <div class="col-md-4">
                        <h2>Toyota</h2>
                        <p>Toyota Motor Corporation, is a Japanese multinational automotive manufacturer headquartered in Toyota, Aichi, Japan. In 2017, Toyota's corporate structure consisted of 364,445 employees worldwide and, as of September 2018, was the sixth-largest company in the world by revenue. Toyota encourages mass-market adoption of hybrid vehicles across the globe.</p>
                        <p><a class="btn btn-secondary" href="https://www.toyota.com/" role="button">View details &raquo;</a></p>
                    </div>
                </div>

        </div>
    </div>
    </div>
@endsection