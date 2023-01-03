@extends('layouts.home')

@section('contenu')

    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Liste des enseignants</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                               href="index.html">Accueil</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>

                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-box">
                        <div class="card-head">

                            <div class="tools">
                                <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>

                            </div>
                        </div>
                        <div class="card-body ">
                            <div class="row p-b-20">
                                <div class="col-md-6 col-sm-6 col-6">
                                    <div class="btn-group">
                                        <a href="{{ route('ajout_filiere') }}" id="addRow" class="btn btn-info">
                                            Ajouter une filière <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-6">
                                    <div class="btn-group pull-right">
                                        <a class="btn deepPink-bgcolor  btn-outline dropdown-toggle"
                                           data-toggle="dropdown">Tools
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-print"></i> Print </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="table-scrollable">
                                <table class="table table-hover table-checkable order-column full-width"
                                       id="example4">
                                    <thead>
                                    <tr>
                                        <th class="center"> images </th>
                                        <th class="center"> # </th>
                                        <th class="center"> Nom </th>
                                        <th class="center"> Effectif </th>
                                        <th class="center"> Salle </th>

                                        <th class="center"> Action </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="odd gradeX">
                                        <td class="user-circle-img">
                                            <img src="assets/img/user/user1.jpg" alt="">
                                        </td>
                                        <td class="center">101</td>
                                        <td class="center">IG</td>
                                        <td class="center">40</td>
                                        <td class="center">IREEP</td>

                                        <td class="center">
                                            <a href="edit_room.html" class="btn btn-tbl-edit btn-xs">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <a class="btn btn-tbl-delete btn-xs">
                                                <i class="fa fa-trash-o "></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td class="user-circle-img">
                                            <img src="assets/img/user/user2.jpg" alt="">
                                        </td>
                                        <td class="center">102</td>
                                        <td class="center">IG</td>
                                        <td class="center">40</td>
                                        <td class="center">IREEP</td>
                                        <td class="center">
                                            <a href="edit_room.html" class="btn btn-tbl-edit btn-xs">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <a class="btn btn-tbl-delete btn-xs">
                                                <i class="fa fa-trash-o "></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td class="user-circle-img">
                                            <img src="assets/img/user/user3.jpg" alt="">
                                        </td>
                                        <td class="center">103</td>
                                        <td class="center">IG</td>
                                        <td class="center">40</td>
                                        <td class="center">IREEP</td>
                                        <td class="center">
                                            <a href="edit_room.html" class="btn btn-tbl-edit btn-xs">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <a class="btn btn-tbl-delete btn-xs">
                                                <i class="fa fa-trash-o "></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td class="user-circle-img">
                                            <img src="assets/img/user/user1.jpg" alt="">
                                        </td>
                                        <td class="center">101</td>
                                        <td class="center">IG</td>
                                        <td class="center">40</td>
                                        <td class="center">IREEP</td>
                                        <td class="center">
                                            <a href="edit_room.html" class="btn btn-tbl-edit btn-xs">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <a class="btn btn-tbl-delete btn-xs">
                                                <i class="fa fa-trash-o "></i>
                                            </a>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
