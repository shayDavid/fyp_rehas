
<section id="top">
    <div class="col-md-9">
        {{-- View attributes of the referral status and available referals here--}}
        <form class="well form-horizontal">
            <fieldset>
                <legend><h2 style="text-align: center;">View Referrals</h2></legend>
                <div>
                    {{-- this table data can be fetched from a controller as an array of data--}}
                    <table id="viewReferral" class="table table-responsive table-hover"
                           summary="This table shows already processed referral letters from non-referral hospital">
                        <caption class="text-center"></caption>
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Referral ID</th>
                            <th>Patient Name</th>
                            <th>Referral Hospital</th>
                            <th>Issued Date</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @for($i = 0; $i < count($referrals); $i++)
                            <tr>
                                <th scope="row">{{ $i + 1 }}</th>
                                <td>{{ $referrals[$i]->rid }}</td>
                                <td>{{ $referrals[$i]->diagnosis }}</td>
                                <td>{{ $referrals[$i]->destination }}</td>
                                <td>{{ $referrals[$i]->issuedate }}</td>
                                <td>{{ $referrals[$i]->status }}</td>
                                <td></td>
                            </tr>
                        @endfor
                        </tbody>
                    </table>
                </div>
            </fieldset>
        </form>
    </div>
</section>

