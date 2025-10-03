<div class="card">
    <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
        <div class="search-set">
            <div class="search-input">
                <span class="btn-searchset"><i class="ti ti-search fs-14 feather-search"></i></span>
            </div>
        </div>
        <div class="d-flex table-dropdown my-xl-auto right-content align-items-center flex-wrap row-gap-3">

        </div>
    </div>

    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table datatable">
                <thead class="thead-light">
                <tr>
                    
                   
                    
                    <th class="no-sort">
                        <label class="checkboxs">
                            <input type="checkbox" id="select-all">
                            <span class="checkmarks"></span>
                        </label>
                    </th>
                    <th >Nom PTBA   </th>
                    <th >Annee    </th>
                    <th >Type   </th>
                  
                    <th >Total activites    </th>
                    <th >Total engagement    </th>
                    <th >Total decaissement     </th>
                    
                    
                    <th class="no-sort" style="width: 12%;"> Actions </th>
                </tr>
                </thead>
                <tbody id="liste_annees">
                    
                       @foreach ($ptbas as $ptba)
                <tr>
                    <td>
                        <label class="checkboxs">
                            <input type="checkbox">
                            <span class="checkmarks"></span>
                        </label>
                    </td>
                    <td width=""><span class="text-gray-9">{{ $ptba['libelle'] }}</span></td>
                    <td><span class="badge rounded-pill bg-soft-success">{{ $ptba['annee'] }}</span></td>
                    <td><span class="badge rounded-pill bg-soft-success">{{ $ptba['type'] }}</span></td>

                    <td><span class="badge rounded-pill bg-soft-success">{{ $ptba['nombre_activites'] }}</span></td>
                    <td><span class="badge rounded-pill bg-soft-success">{{ $ptba['montant_global'] }}</span></td>
                     <td><span class="badge rounded-pill bg-soft-success">{{ $ptba['montant_decaissement'] }}</span></td>
                    

                    <td class="action-table-data">
                        <div class="edit-delete-action">
                            <a data-id="{{ $ptba['id'] }}" class="me-2 p-2 modifierUtilisateur" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Modifier ">
                                <i data-feather="edit" class="feather-edit"></i>
                            </a>
                            <a data-id="{{ $ptba['id'] }}" class="me-2 p-2 supprimerUtilisateur" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Supprimer" >
                                <i data-feather="trash-2" class="feather-trash-2"></i>
                            </a>
                            
                            <a data-id="{{ $ptba['id'] }}" 
                                class="me-2 p-2 voirUtilisateur" 
                                href="#" 
                                data-bs-toggle="tooltip" 
                                data-bs-placement="top" 
                                title="Voir">
                                 <i data-feather="eye" class="feather-eye"></i>
                            </a>
                        </div>

                    </td>
                </tr>
                
                  @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
