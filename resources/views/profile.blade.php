@extends('layouts.app')

{{ dd(Auth::user()->rankModels->name) }}

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#details" role="tab" aria-controls="home" aria-selected="true">Details</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#groups" role="tab" aria-controls="groups" aria-selected="false">Groups</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" id="contact-tab" data-toggle="tab" href="#training" role="tab" aria-controls="training" aria-selected="false">Training</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#competencies" role="tab" aria-controls="competencies" aria-selected="false">Competencies</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#patrols" role="tab" aria-controls="patrols" aria-selected="false">Patrols</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#activity" role="tab" aria-controls="activity" aria-selected="false">Activity</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#notices" role="tab" aria-controls="notices" aria-selected="false">Notices</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#forms" role="tab" aria-controls="forms" aria-selected="false">Forms</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#driving" role="tab" aria-controls="driving" aria-selected="false">Driving</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#record" role="tab" aria-controls="record" aria-selected="false">Record</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#investigations" role="tab" aria-controls="investigations" aria-selected="false">Investigations</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#uniforms" role="tab" aria-controls="uniforms" aria-selected="false">Uniforms</a>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="details" role="tabpanel" aria-labelledby="details-tab">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered table-striped">
                            <caption>Your details</caption>
                            <tbody>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ Auth::user()->email }}</td>
                                </tr>
                                <tr>
                                    <th>First Name</th>
                                    <td>{{ Auth::user()->first_name }}</td>
                                </tr>
                                <tr>
                                    <th>Last Name</th>
                                    <td>{{ Auth::user()->last_name }}</td>
                                </tr>
                                <tr>
                                    <th>Date of Birth</th>
                                    <td>{{ \Carbon\Carbon::parse(Auth::user()->dob)->format('d/m/Y')}}</td>
                                </tr>
                                <tr>
                                    <th>PIN</th>
                                    @empty(Auth::user()->pin)
                                        <td>No PIN set.</td>
                                    @else
                                        <td>{{ Auth::user()->pin }}</td>
                                    @endempty
                                </tr>
                            </tr>
                            <tr>
                                <th>Rank</th>
                                @empty(Auth::user()->rank_id)
                                    <td>No Rank set.</td>
                                @else
                                    <td>{{ Auth::user()->rank_id->name }}</td>
                                @endempty
                            </tr>
                                <tr>
                                    <th>Activity requirement exemption</th>
                                    @if (Auth::user()->activity_exempt == 1)
                                        <td>You are exempt from activity requirements.</td>
                                    @else
                                        <td>No exemption.</td>
                                    @endif
                                </tr>
                                <tr>
                                    <th>LOA end date</th>
                                    @empty(Auth::user()->pin)
                                        <td>No authorized LOA.</td>
                                    @else
                                        <td>{{ \Carbon\Carbon::parse(Auth::user()->loa_end_date)->format('d/m/Y')}}</td>
                                    @endempty
                                </tr>
                                <tr>
                                    <th>Discord ID</th>
                                    @empty(Auth::user()->discordid)
                                        <td>Discord ID not set.</td>
                                    @else
                                        <td>{{ (Auth::user()->discordid) }}</td>
                                    @endempty
                                </tr>
                                <tr>
                                    <th>LOA end date</th>
                                    @empty(Auth::user()->teamspeakid)
                                        <td>TeamSpeak ID not set.</td>
                                    @else
                                        <td>{{ (Auth::user()->teamspeakid) }}</td>
                                    @endempty
                                </tr>
                            </tbody>

                        </table>
                    </div>




                </div>
                <div class="tab-pane fade" id="groups" role="tabpanel" aria-labelledby="groups-tab">tEST</div>
                <div class="tab-pane fade" id="training" role="tabpanel" aria-labelledby="training-tab">..sa.</div>
              </div>
        </div>

    </div>
</div>
@endsection
