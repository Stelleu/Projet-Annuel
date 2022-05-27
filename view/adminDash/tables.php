<?php
$title= "Utilisateurs";
include __DIR__ . "/includes/header.php"; ?>

      <div id="allcontent">
          <div class="col-12 px-5">
              <div class="card mb-4 ">
                  <div class="card-header pb-0">
                      <h6>Ajouter un super-utilisateur</h6>
                  </div>
                  <div class="card-body px-0 pt-0 pb-2">
                      <div class="table-responsive p-0">
                          <table class="table table-hover">
                              <thead>
                              <!--  <div id="alertForm" class="alert alert-warning" role="alert">
                                    This is a warning alert—check it out!
                                </div>-->
                              <tr>
                                  <th class="text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Prénom</th>
                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nom</th>
                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Phone</th>
                              </tr>
                              </thead>
                              <tbody>
                              <div class="mx-10 my-2 p-2 d-none text-center alert alert-success" id="msgDivAddUser" role="alert">
                                  <h5>L'utilisateur N°<span id="msgAddNumber" class="h4"></span> a été ajouté avec succès ! </h5>
                              </div>
                              <div class="mx-10 d-none my-2 p-2 text-center alert alert-success" id="msgDivDelUser" role="alert">
                                  <h5>L'utilisateur  N°<span id="msgDelNumber" class="h4"></span> a été supprimé avec succès ! </h5>
                              </div>
                              <form method="post" id="formUser" action="">
                              <td>
                                  <input type="text" class=" form-control" id="firstname" name="firstname" placeholder="Prénom"/>
                              </td>
                              <td>
                                  <input type="text" class=" form-control" id="lastname" name="lastname" placeholder="Nom"/>
                              </td>
                              <td>
                                  <input type="text" class=" form-control" id="email" name="email" placeholder="Email"/>
                              </td>
                              <td class="">
                                  <input type="text" class=" form-control" id="phone" name="phone" placeholder="Phone"/>
                              </td>
                              <td>
                                  <button type="submit" class="btn btn-success" id="btnAddUser">
                                      Ajouter
                                  </button>
                                  </form>
                              </td>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div>
          <div class="col-12 px-5">
              <div class="card mb-4 ">
                  <div class="card-header pb-0">
                      <h6>Informations Clients</h6>
                  </div>
                  <div class="card-body px-0 pt-0 pb-2">
                      <div id="infoUser" class="table-responsive p-0">
                          <table  class="table align-items-center mb-0">
                              <thead>
                              <tr>
                                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                  <th class="text-center  text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Prénom</th>
                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nom</th>
                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Téléphone</th>
                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <?php
                                  foreach($users as $cle => $infousers) {
                                    foreach ($infousers as $cle => $info) {
                                         if ($cle == "idUser") {
                                             echo '<td class="align-middle text-center">' . $info . '</td>';
                                       } elseif ($cle == "firstname") {
                                             echo '<td class="align-middle text-center">' . $info . '</td>';
                                      ?>
                                  <td class="align-middle text-center">
                                      <?php } elseif ($cle == "lastname") {?>
                                      <span class="text-secondary text-xs font-weight-bold"><?php echo $info ?></span>
                                  </td>
                                  <td class="align-middle text-center">
                                      <?php } elseif ($cle == "phone") {?>
                                      <span class="text-secondary text-xs font-weight-bold"><?php echo $info ?></span>
                                  </td>
                                  <td class="align-middle text-center">
                                      <?php } elseif ($cle == "email") {
                                      ?>
                                      <span class="text-secondary text-xs font-weight-bold"><?php echo $info ?></span>
                                  </td>
                                         <?php }elseif ($cle == "status_user") {?>
                                         <td class="align-middle text-center text-sm">

                                         <?php if ($info == "Admin") {?>
                                    <span class="badge badge-sm bg-gradient-success"><?php echo $info ?></span>
                                             <?php }else{?>
                                             <span class="badge badge-sm bg-gradient-secondary"><?php echo $info ?></span>
                                  </td>
                                         <?php }
                                    }
                                    }?>
                                  <td class="align-middle text-center">
                                      <!--<a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                          Edit </a>-->
                                      <form method="get" id="delUser">
                                          <input type="hidden" name="id" value="<?php echo $infousers['idUser'];?>"/>
                                          <input type="hidden" name="delete" value="delete"/>
                                          <button type="submit" class="btn btn-danger">Supprimer</button>
                                      </form>
                                  </td>
                              </tr>
                                     <?php }?>
                              </tbody>
                          </table>
                          <?php if (count($users) == 0) {?>
                              <div class="d-flex flex-column pt-3">
                                  <div>
                                      <h5 class="text-center">Aucune utilisateur répertoriée </h5>
                                  </div>
                              </div>
                          <?php }?>
                      </div>
                  </div>
              </div>
          </div>
      </div>
<?php require_once('includes/footer.php'); ?>

<!--<div class="container-fluid py-4">-->
<!--    <div class="row">-->
<!--        <div class="col-12">-->
<!--            <div class="card mb-4">-->
<!--                <div class="card-header pb-0">-->
<!--                    <h6>Projects table</h6>-->
<!--                </div>-->
<!--                <div class="card-body px-0 pt-0 pb-2">-->
<!--                    <div class="table-responsive p-0">-->
<!--                        <table class="table align-items-center justify-content-center mb-0">-->
<!--                            <thead>-->
<!--                            <tr>-->
<!--                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Project</th>-->
<!--                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Budget</th>-->
<!--                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>-->
<!--                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Completion</th>-->
<!--                                <th></th>-->
<!--                            </tr>-->
<!--                            </thead>-->
<!--                            <tbody>-->
<!--                            <tr>-->
<!--                                <td>-->
<!--                                    <div class="d-flex px-2">-->
<!--                                        <div>-->
<!--                                            <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm rounded-circle me-2" alt="spotify">-->
<!--                                        </div>-->
<!--                                        <div class="my-auto">-->
<!--                                            <h6 class="mb-0 text-sm">Spotify</h6>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </td>-->
<!--                                <td>-->
<!--                                    <p class="text-sm font-weight-bold mb-0">$2,500</p>-->
<!--                                </td>-->
<!--                                <td>-->
<!--                                    <span class="text-xs font-weight-bold">working</span>-->
<!--                                </td>-->
<!--                                <td class="align-middle text-center">-->
<!--                                    <div class="d-flex align-items-center justify-content-center">-->
<!--                                        <span class="me-2 text-xs font-weight-bold">60%</span>-->
<!--                                        <div>-->
<!--                                            <div class="progress">-->
<!--                                                <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </td>-->
<!--                                <td class="align-middle">-->
<!--                                    <button class="btn btn-link text-secondary mb-0">-->
<!--                                        <i class="fa fa-ellipsis-v text-xs"></i>-->
<!--                                    </button>-->
<!--                                </td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td>-->
<!--                                    <div class="d-flex px-2">-->
<!--                                        <div>-->
<!--                                            <img src="../assets/img/small-logos/logo-invision.svg" class="avatar avatar-sm rounded-circle me-2" alt="invision">-->
<!--                                        </div>-->
<!--                                        <div class="my-auto">-->
<!--                                            <h6 class="mb-0 text-sm">Invision</h6>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </td>-->
<!--                                <td>-->
<!--                                    <p class="text-sm font-weight-bold mb-0">$5,000</p>-->
<!--                                </td>-->
<!--                                <td>-->
<!--                                    <span class="text-xs font-weight-bold">done</span>-->
<!--                                </td>-->
<!--                                <td class="align-middle text-center">-->
<!--                                    <div class="d-flex align-items-center justify-content-center">-->
<!--                                        <span class="me-2 text-xs font-weight-bold">100%</span>-->
<!--                                        <div>-->
<!--                                            <div class="progress">-->
<!--                                                <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </td>-->
<!--                                <td class="align-middle">-->
<!--                                    <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">-->
<!--                                        <i class="fa fa-ellipsis-v text-xs"></i>-->
<!--                                    </button>-->
<!--                                </td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td>-->
<!--                                    <div class="d-flex px-2">-->
<!--                                        <div>-->
<!--                                            <img src="../assets/img/small-logos/logo-jira.svg" class="avatar avatar-sm rounded-circle me-2" alt="jira">-->
<!--                                        </div>-->
<!--                                        <div class="my-auto">-->
<!--                                            <h6 class="mb-0 text-sm">Jira</h6>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </td>-->
<!--                                <td>-->
<!--                                    <p class="text-sm font-weight-bold mb-0">$3,400</p>-->
<!--                                </td>-->
<!--                                <td>-->
<!--                                    <span class="text-xs font-weight-bold">canceled</span>-->
<!--                                </td>-->
<!--                                <td class="align-middle text-center">-->
<!--                                    <div class="d-flex align-items-center justify-content-center">-->
<!--                                        <span class="me-2 text-xs font-weight-bold">30%</span>-->
<!--                                        <div>-->
<!--                                            <div class="progress">-->
<!--                                                <div class="progress-bar bg-gradient-danger" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="30" style="width: 30%;"></div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </td>-->
<!--                                <td class="align-middle">-->
<!--                                    <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">-->
<!--                                        <i class="fa fa-ellipsis-v text-xs"></i>-->
<!--                                    </button>-->
<!--                                </td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td>-->
<!--                                    <div class="d-flex px-2">-->
<!--                                        <div>-->
<!--                                            <img src="../assets/img/small-logos/logo-slack.svg" class="avatar avatar-sm rounded-circle me-2" alt="slack">-->
<!--                                        </div>-->
<!--                                        <div class="my-auto">-->
<!--                                            <h6 class="mb-0 text-sm">Slack</h6>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </td>-->
<!--                                <td>-->
<!--                                    <p class="text-sm font-weight-bold mb-0">$1,000</p>-->
<!--                                </td>-->
<!--                                <td>-->
<!--                                    <span class="text-xs font-weight-bold">canceled</span>-->
<!--                                </td>-->
<!--                                <td class="align-middle text-center">-->
<!--                                    <div class="d-flex align-items-center justify-content-center">-->
<!--                                        <span class="me-2 text-xs font-weight-bold">0%</span>-->
<!--                                        <div>-->
<!--                                            <div class="progress">-->
<!--                                                <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="0" style="width: 0%;"></div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </td>-->
<!--                                <td class="align-middle">-->
<!--                                    <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">-->
<!--                                        <i class="fa fa-ellipsis-v text-xs"></i>-->
<!--                                    </button>-->
<!--                                </td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td>-->
<!--                                    <div class="d-flex px-2">-->
<!--                                        <div>-->
<!--                                            <img src="../assets/img/small-logos/logo-webdev.svg" class="avatar avatar-sm rounded-circle me-2" alt="webdev">-->
<!--                                        </div>-->
<!--                                        <div class="my-auto">-->
<!--                                            <h6 class="mb-0 text-sm">Webdev</h6>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </td>-->
<!--                                <td>-->
<!--                                    <p class="text-sm font-weight-bold mb-0">$14,000</p>-->
<!--                                </td>-->
<!--                                <td>-->
<!--                                    <span class="text-xs font-weight-bold">working</span>-->
<!--                                </td>-->
<!--                                <td class="align-middle text-center">-->
<!--                                    <div class="d-flex align-items-center justify-content-center">-->
<!--                                        <span class="me-2 text-xs font-weight-bold">80%</span>-->
<!--                                        <div>-->
<!--                                            <div class="progress">-->
<!--                                                <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="80" style="width: 80%;"></div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </td>-->
<!--                                <td class="align-middle">-->
<!--                                    <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">-->
<!--                                        <i class="fa fa-ellipsis-v text-xs"></i>-->
<!--                                    </button>-->
<!--                                </td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td>-->
<!--                                    <div class="d-flex px-2">-->
<!--                                        <div>-->
<!--                                            <img src="../assets/img/small-logos/logo-xd.svg" class="avatar avatar-sm rounded-circle me-2" alt="xd">-->
<!--                                        </div>-->
<!--                                        <div class="my-auto">-->
<!--                                            <h6 class="mb-0 text-sm">Adobe XD</h6>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </td>-->
<!--                                <td>-->
<!--                                    <p class="text-sm font-weight-bold mb-0">$2,300</p>-->
<!--                                </td>-->
<!--                                <td>-->
<!--                                    <span class="text-xs font-weight-bold">done</span>-->
<!--                                </td>-->
<!--                                <td class="align-middle text-center">-->
<!--                                    <div class="d-flex align-items-center justify-content-center">-->
<!--                                        <span class="me-2 text-xs font-weight-bold">100%</span>-->
<!--                                        <div>-->
<!--                                            <div class="progress">-->
<!--                                                <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </td>-->
<!--                                <td class="align-middle">-->
<!--                                    <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">-->
<!--                                        <i class="fa fa-ellipsis-v text-xs"></i>-->
<!--                                    </button>-->
<!--                                </td>-->
<!--                            </tr>-->
<!--                            </tbody>-->
<!--                        </table>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

