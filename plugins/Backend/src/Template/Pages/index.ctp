<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="btn-group pull-right m-t-15">
            <a href="/admin/pages/edit" class="btn btn-default waves-effect waves-light"  aria-expanded="false">Toevoegen</a>
        </div>
        <h4 class="page-title">Pagina's</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">CMS</a></li>
            <li class="breadcrumb-item"><a href="/admin/pages">Pagina's</a></li>
            <li class="breadcrumb-item active">Overzicht</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
            <div class="row">
                <div class="col-sm-12">
                    <form role="form">
                        <div class="form-group contact-search m-b-30">
                            <input type="text" id="search" class="form-control" placeholder="Zoeken...">
                            <button type="submit" class="btn btn-white"><i class="fa fa-search"></i></button>
                        </div> <!-- form-group -->
                    </form>
                </div>
                
            </div>

            <div class="table-responsive">
                <table class="table table-hover mails m-0 table table-actions-bar">
                    <thead>
                    <tr>
                        <th style="width: 120px;">
                            <div class="checkbox checkbox-primary checkbox-single m-r-15">
                                <input id="action-checkbox" type="checkbox">
                                <label for="action-checkbox"></label>
                            </div>
                            <div class="btn-group dropdown">
                                <button type="button" class="btn btn-white btn-sm dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true"><i class="caret"></i></button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                    <a class="dropdown-item" href="#">Online plaatsen</a>
                                    <a class="dropdown-item" href="#">Offline plaatsen</a>
                                    <a class="dropdown-item" href="#">Verwijderen</a>
                                </div>
                            </div>
                        </th>
                        <th>Titel</th>
                        <th>URL</th>
                        <th>Status</th>
                        <th style="min-width: 90px;">Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr class="active">
                        <td>
                            <div class="checkbox checkbox-primary m-r-15">
                                <input id="checkbox2" type="checkbox">
                                <label for="checkbox2"></label>
                            </div>
                        </td>

                        <td>
                            Home
                        </td>

                        <td>
                            <a href="#">/nl</a>
                        </td>

                        <td>
                            <b><a href=""><i style="color:green;" class="md md-flag"></i></a> </b>
                        </td>

                        <td>
                            <a href="/admin/pages/edit/1" class="table-action-btn"><i class="md md-edit"></i></a>
                            <a href="/admin/pages/delete/1" class="table-action-btn"><i class="md md-close"></i></a>
                        </td>
                    </tr>



                    </tbody>
                </table>
            </div>
        </div>

    </div> <!-- end col -->
    
</div>
