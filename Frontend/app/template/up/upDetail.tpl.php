<?php include App::$view_root . "/base/common.tpl.php" ?>
<?php include App::$view_root . "/base/header.tpl.php" ?>
<?php include App::$view_root . "/base/sideBar.tpl.php" ?>

<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><i class="f-16 fa fa-home"></i></li>
                        <li class="breadcrumb-item">UP   </li>
                    </ol>
                    <h3><?=_L('Up_Details')?></h3>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="user-profile">
            <div class="row">
                <!-- user profile first-style start-->
                <div class="col-sm-12">
                    <div class="card hovercard text-center">
                        <div class="user-image">
                            <div class="avatar"><img alt="" src="<?=$PRM['upRawData']['headUrl']?>"></div>
                        </div>
                        <div class="info">
                            <div class="row">
                                <div class="col-sm-6 col-lg-4 order-sm-1 order-xl-0">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="ttl-info text-left">
                                                <h6><i class="fa fa-bookmark-o"></i>   <?=_L('Up_Note')?></h6><span><?=$PRM['upDetail']['name']?></span>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="ttl-info text-left">
                                                <h6><i class="fa fa-cloud"></i>   <?=_L('Up_RegisterDate')?></h6><span><?=$PRM['registerDate']?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-4 order-sm-0 order-xl-1">
                                    <div class="user-designation">
                                        <div class="title"><a target="_blank" href="https://www.acfun.cn/u/<?=$PRM['upDetail']['uperid']?>"><?=$PRM['upRawData']['name']?></a></div>
                                        <div class="desc mt-2"><?=$PRM['upRawData']['signature']?></div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4 order-sm-2 order-xl-2">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="ttl-info text-left">
                                                <h6><i class="fa fa-calendar"></i>   <?=_L('Up_ACRegisterDate')?></h6><span><?=$PRM['acRegisterDate']?></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="ttl-info text-left">
                                                <h6><i class="fa fa-location-arrow"></i>   <?=_L('Up_LastUpdatedDate')?></h6><span><?=$PRM['updatedDate']?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="social-media">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a href="https://message.acfun.cn/im?targetId=<?=$PRM['upDetail']['uperid']?>"><i class="fa fa-comment"></i></a></li>
                                    <li class="list-inline-item"><a href="<?=$webRoot?>/d/<?=$PRM['upDetail']['uperid']?>"><i class="fa fa-rss"></i></a></li>
                                </ul>
                            </div>
                            <div class="follow">
                                <div class="row">
                                    <div class="col-6 text-md-right border-right">
                                        <div class="follow-num"><?=$PRM['upRawData']['followers']?></div><span><?=_L('Up_Followers')?></span>
                                    </div>
                                    <div class="col-6 text-md-left">
                                        <div class="follow-num"><?=$PRM['upRawData']['following']?></div><span><?=_L('Up_Following')?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- user profile first-style end-->

                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-tabs border-tab" id="top-tab" role="tablist">
                                <li class="nav-item"><a class="nav-link active" id="all-up" data-toggle="tab" href="#all-up-tab" role="tab" aria-selected="true"><i class="icon-settings"></i><?=_L('UP_All_Title')?></a>
                                    <div class="material-border"></div>
                                </li>
                                <li class="nav-item"><a class="nav-link" id="followers" data-toggle="tab" href="#follower-tab" role="tab" aria-selected="false"><i class="icon-target"></i><?=_L('UP_Followers_Title')?></a>
                                    <div class="material-border"></div>
                                </li>
                                <li class="nav-item"><a class="nav-link" id="contents" data-toggle="tab" href="#content-tab" role="tab" aria-selected="false"><i class="icon-image"></i><?=_L('UP_Contents_Title')?></a>
                                    <div class="material-border"></div>
                                </li>
                            </ul>
                            <div class="tab-content" id="top-tabContent">
                                <div class="tab-pane fade show active" id="all-up-tab" role="tabpanel" aria-labelledby="all-up">
                                    <div id="area-spaline-up-all"></div>
                                </div>
                                <div class="tab-pane fade" id="follower-tab" role="tabpanel" aria-labelledby="followers">
                                    <div id="area-spaline-followers"></div>
                                </div>
                                <div class="tab-pane fade" id="content-tab" role="tabpanel" aria-labelledby="contents">
                                    <div id="area-spaline-contents"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-tabs border-tab" id="top-tab" role="tablist">
                                <li class="nav-item"><a class="nav-link active" id="all-up-live" data-toggle="tab" href="#all-up-live-tab" role="tab" aria-selected="true"><i class="icon-settings"></i><?=_L('UP_All_Title')?></a>
                                    <div class="material-border"></div>
                                </li>
                                <li class="nav-item"><a class="nav-link" id="liveInfo" data-toggle="tab" href="#liveInfo-tab" role="tab" aria-selected="false"><i class="icon-video-clapper"></i><?=_L('UP_LiveInfo_Title')?></a>
                                    <div class="material-border"></div>
                                </li>
                                <li class="nav-item"><a class="nav-link" id="liveLoveInfo" data-toggle="tab" href="#liveLoveInfo-tab" role="tab" aria-selected="false"><i class="icon-heart"></i><?=_L('UP_LiveLoveInfo_Title')?></a>
                                    <div class="material-border"></div>
                                </li>
                                <li class="nav-item"><a class="nav-link" id="liveUserInfo" data-toggle="tab" href="#liveUserInfo-tab" role="tab" aria-selected="false"><i class="icon-map-alt"></i><?=_L('UP_LiveUserInfo_Title')?></a>
                                    <div class="material-border"></div>
                                </li>
                            </ul>
                            <div class="tab-content" id="top-tabContent">
                                <div class="tab-pane fade show active" id="all-up-live-tab" role="tabpanel" aria-labelledby="all-up-live">
                                    <div id="area-spaline-liveInfo-all"></div>
                                </div>
                                <div class="tab-pane fade" id="liveInfo-tab" role="tabpanel" aria-labelledby="liveInfo">
                                    <div id="area-spaline-liveInfo"></div>
                                </div>
                                <div class="tab-pane fade" id="liveLoveInfo-tab" role="tabpanel" aria-labelledby="liveLoveInfo">
                                    <div id="area-spaline-liveLoveInfo"></div>
                                </div>
                                <div class="tab-pane fade" id="liveUserInfo-tab" role="tabpanel" aria-labelledby="liveUserInfo">
                                    <div id="area-spaline-liveUserInfo"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <? if($PRM['upRawData']['spaceImage'] != "" || $PRM['upRawData']['verifiedText'] != "" ){?>
                <div class="col-sm-12">
                    <div class="card">
                        <div class="profile-img-style">
                            <p><?=$PRM['upRawData']['verifiedText']?></p>
                            <? if($PRM['upRawData']['spaceImage'] != ""){?>
                            <div class="img-container">
                                <div class="my-gallery" id="aniimated-thumbnials" itemscope="">
                                    <figure itemprop="associatedMedia" itemscope="">
                                        <img class="img-fluid rounded" src="<?=$PRM['upRawData']['spaceImage']?>" itemprop="thumbnail" alt="gallery">
                                    </figure>
                                </div>
                            </div>
                            <?}?>
                        </div>
                    </div>
                </div>
                <?}?>

            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>

<?php include App::$view_root . "/base/footer.tpl.php" ?>

<script>
    var optionsUpAll = {
        series: [
            {
                name: '<?=_L('Up_Followers')?>',
                //type: 'line',
                data: <?=$PRM['chartData']->json_encode()?>
            },{
                name: '<?=_L('Up_Contents')?>',
                //type: 'column',
                data: <?=$PRM['contentData']->json_encode()?>
            }
        ],
        chart: {
            type: 'area',
            stacked: false,
            height: 350,
            zoom: {
                type: 'x',
                enabled: true,
                autoScaleYaxis: true
            },
            toolbar: {
                autoSelected: 'zoom'
            }
        },
        dataLabels: {
            enabled: false
        },
        markers: {
            size: 0,
        },
        title: {
            text: '',
            align: 'left'
        },
        fill: {
            type: 'gradient',
            gradient: {
                shadeIntensity: 1,
                inverseColors: false,
                opacityFrom: 0.5,
                opacityTo: 0,
                stops: [0, 90, 100]
            },
        },
        yaxis: [
            {
                labels: {
                    formatter: function (val) {
                        return val.toFixed(0);
                    },
                },
                title: {
                    text: '<?=$PRM['upRawData']['name']?> - <?=_L('Up_Followers')?>'
                },
            },{
                opposite: true,
                labels: {
                    formatter: function (val) {
                        return val.toFixed(0);
                    },
                },
                title: {
                    text: '<?=$PRM['upRawData']['name']?> - <?=_L('Up_Contents')?>'
                },
            }
        ],
        xaxis: {
            type: 'datetime',
            labels: {
                datetimeUTC: false,
                datetimeFormatter: {
                    year: 'yyyy',
                    month: "MMM 'yy",
                    day: 'dd MMM',
                    hour: 'HH:mm',
                },
            }
        },
        tooltip: {
            shared: true,
            y: {
                formatter: function (val) {
                    return val.toFixed(0);
                }
            }
        }
    };

    var optionsFollowers = {
        series: [{
            name: '<?=_L('Up_Followers')?>',
            data: <?=$PRM['chartData']->json_encode()?>
        }],
        chart: {
            type: 'area',
            stacked: false,
            height: 350,
            zoom: {
                type: 'x',
                enabled: true,
                autoScaleYaxis: true
            },
            toolbar: {
                autoSelected: 'zoom'
            }
        },
        dataLabels: {
            enabled: false
        },
        markers: {
            size: 0,
        },
        title: {
            text: '',
            align: 'left'
        },
        fill: {
            type: 'gradient',
            gradient: {
                shadeIntensity: 1,
                inverseColors: false,
                opacityFrom: 0.5,
                opacityTo: 0,
                stops: [0, 90, 100]
            },
        },
        yaxis: {
            labels: {
                formatter: function (val) {
                    return val.toFixed(0);
                },
            },
            title: {
                text: '<?=$PRM['upRawData']['name']?> - <?=_L('Up_Followers')?>'
            },
        },
        xaxis: {
            type: 'datetime',
            labels: {
                datetimeUTC: false,
                datetimeFormatter: {
                    year: 'yyyy',
                    month: "MMM 'yy",
                    day: 'dd MMM',
                    hour: 'HH:mm',
                },
            }
        },
        tooltip: {
            shared: false,
            y: {
                formatter: function (val) {
                    return val.toFixed(0);
                }
            }
        }
    };

    var optionsContents = {
        series: [{
            name: '<?=_L('Up_Contents')?>',
            data: <?=$PRM['contentData']->json_encode()?>
        }],
        chart: {
            type: 'area',
            stacked: false,
            height: 350,
            zoom: {
                type: 'x',
                enabled: true,
                autoScaleYaxis: true
            },
            toolbar: {
                autoSelected: 'zoom'
            }
        },
        dataLabels: {
            enabled: false
        },
        markers: {
            size: 0,
        },
        title: {
            text: '',
            align: 'left'
        },
        fill: {
            type: 'gradient',
            gradient: {
                shadeIntensity: 1,
                inverseColors: false,
                opacityFrom: 0.5,
                opacityTo: 0,
                stops: [0, 90, 100]
            },
        },
        yaxis: {
            labels: {
                formatter: function (val) {
                    return val.toFixed(0);
                },
            },
            title: {
                text: '<?=$PRM['upRawData']['name']?> - <?=_L('Up_Contents')?>'
            },
        },
        xaxis: {
            type: 'datetime',
            labels: {
                datetimeUTC: false,
                datetimeFormatter: {
                    year: 'yyyy',
                    month: "MMM 'yy",
                    day: 'dd MMM',
                    hour: 'HH:mm',
                },
            }
        },
        tooltip: {
            shared: false,
            y: {
                formatter: function (val) {
                    return val.toFixed(0);
                }
            }
        }
    };

    var optionsLiveInfoAll = {
        series: [
            {
                name: '<?=_L('UP_LiveInfo_Title')?>',
                data: <?=$PRM['chartLiveData']->json_encode()?>
            },{
                name: '<?=_L('UP_LiveUserInfo_Title')?>',
                data: <?=$PRM['chartLiveUserData']->json_encode()?>
            }
        ],
        chart: {
            type: 'area',
            stacked: false,
            height: 350,
            zoom: {
                type: 'x',
                enabled: true,
                autoScaleYaxis: true
            },
            toolbar: {
                autoSelected: 'zoom'
            }
        },
        dataLabels: {
            enabled: false
        },
        markers: {
            size: 0,
        },
        title: {
            text: '',
            align: 'left'
        },
        fill: {
            type: 'gradient',
            gradient: {
                shadeIntensity: 1,
                inverseColors: false,
                opacityFrom: 0.5,
                opacityTo: 0,
                stops: [0, 90, 100]
            },
        },
        yaxis: [
            {
                labels: {
                    formatter: function (val) {
                        return val.toFixed(0);
                    },
                },
                title: {
                    text: '<?=$PRM['upRawData']['name']?> - <?=_L('UP_LiveInfo_Title')?>'
                },
            },{
                opposite:true,
                labels: {
                    formatter: function (val) {
                        return val.toFixed(0);
                    },
                },
                title: {
                    text: '<?=$PRM['upRawData']['name']?> - <?=_L('UP_LiveUserInfo_Title')?>'
                },
            }
        ],
        xaxis: {
            type: 'datetime',
            labels: {
                datetimeUTC: false,
                datetimeFormatter: {
                    year: 'yyyy',
                    month: "MMM 'yy",
                    day: 'dd MMM',
                    hour: 'HH:mm',
                },
            }
        },
        tooltip: {
            shared: false,
            y: {
                formatter: function (val) {
                    return val.toFixed(0);
                }
            }
        }
    };

    var optionsLiveInfo = {
        series: [{
            name: '<?=_L('UP_LiveInfo_Title')?>',
            data: <?=$PRM['chartLiveData']->json_encode()?>
        }],
        chart: {
            type: 'area',
            stacked: false,
            height: 350,
            zoom: {
                type: 'x',
                enabled: true,
                autoScaleYaxis: true
            },
            toolbar: {
                autoSelected: 'zoom'
            }
        },
        dataLabels: {
            enabled: false
        },
        markers: {
            size: 0,
        },
        title: {
            text: '',
            align: 'left'
        },
        fill: {
            type: 'gradient',
            gradient: {
                shadeIntensity: 1,
                inverseColors: false,
                opacityFrom: 0.5,
                opacityTo: 0,
                stops: [0, 90, 100]
            },
        },
        yaxis: {
            labels: {
                formatter: function (val) {
                    return val.toFixed(0);
                },
            },
            title: {
                text: '<?=$PRM['upRawData']['name']?> - <?=_L('UP_LiveInfo_Title')?>'
            },
        },
        xaxis: {
            type: 'datetime',
            labels: {
                datetimeUTC: false,
                datetimeFormatter: {
                    year: 'yyyy',
                    month: "MMM 'yy",
                    day: 'dd MMM',
                    hour: 'HH:mm',
                },
            }
        },
        tooltip: {
            shared: false,
            y: {
                formatter: function (val) {
                    return val.toFixed(0);
                }
            }
        }
    };

    var optionsLiveLoveInfo = {
        series: [{
            name: '<?=_L('UP_LiveLoveInfo_Title')?>',
            data: <?=$PRM['chartLiveLoveData']->json_encode()?>
        }],
        chart: {
            type: 'area',
            stacked: false,
            height: 350,
            zoom: {
                type: 'x',
                enabled: true,
                autoScaleYaxis: true
            },
            toolbar: {
                autoSelected: 'zoom'
            }
        },
        dataLabels: {
            enabled: false
        },
        markers: {
            size: 0,
        },
        title: {
            text: '',
            align: 'left'
        },
        fill: {
            type: 'gradient',
            gradient: {
                shadeIntensity: 1,
                inverseColors: false,
                opacityFrom: 0.5,
                opacityTo: 0,
                stops: [0, 90, 100]
            },
        },
        yaxis: {
            labels: {
                formatter: function (val) {
                    return val.toFixed(0);
                },
            },
            title: {
                text: '<?=$PRM['upRawData']['name']?> - <?=_L('UP_LiveLoveInfo_Title')?>'
            },
        },
        xaxis: {
            type: 'datetime',
            labels: {
                datetimeUTC: false,
                datetimeFormatter: {
                    year: 'yyyy',
                    month: "MMM 'yy",
                    day: 'dd MMM',
                    hour: 'HH:mm',
                },
            }
        },
        tooltip: {
            shared: false,
            y: {
                formatter: function (val) {
                    return val.toFixed(0);
                }
            }
        }
    };

    var optionsLiveUserInfo = {
        series: [{
            name: '<?=_L('UP_LiveUserInfo_Title')?>',
            data: <?=$PRM['chartLiveUserData']->json_encode()?>
        }],
        chart: {
            type: 'area',
            stacked: false,
            height: 350,
            zoom: {
                type: 'x',
                enabled: true,
                autoScaleYaxis: true
            },
            toolbar: {
                autoSelected: 'zoom'
            }
        },
        dataLabels: {
            enabled: false
        },
        markers: {
            size: 0,
        },
        title: {
            text: '',
            align: 'left'
        },
        fill: {
            type: 'gradient',
            gradient: {
                shadeIntensity: 1,
                inverseColors: false,
                opacityFrom: 0.5,
                opacityTo: 0,
                stops: [0, 90, 100]
            },
        },
        yaxis: {
            labels: {
                formatter: function (val) {
                    return val.toFixed(0);
                },
            },
            title: {
                text: '<?=$PRM['upRawData']['name']?> - <?=_L('UP_LiveUserInfo_Title')?>'
            },
        },
        xaxis: {
            type: 'datetime',
            labels: {
                datetimeUTC: false,
                datetimeFormatter: {
                    year: 'yyyy',
                    month: "MMM 'yy",
                    day: 'dd MMM',
                    hour: 'HH:mm',
                },
            }
        },
        tooltip: {
            shared: false,
            y: {
                formatter: function (val) {
                    return val.toFixed(0);
                }
            }
        }
    };

    var chartUpAll = new ApexCharts(
        document.querySelector("#area-spaline-up-all"),
        optionsUpAll
    );

    var chartFollowers = new ApexCharts(
        document.querySelector("#area-spaline-followers"),
        optionsFollowers
    );

    var chartContents = new ApexCharts(
        document.querySelector("#area-spaline-contents"),
        optionsContents
    );

    var chartUpLiveAll = new ApexCharts(
        document.querySelector("#area-spaline-liveInfo-all"),
        optionsLiveInfoAll
    );

    var chartLiveInfo = new ApexCharts(
        document.querySelector("#area-spaline-liveInfo"),
        optionsLiveInfo
    );

    var chartLiveLoveInfo = new ApexCharts(
        document.querySelector("#area-spaline-liveLoveInfo"),
        optionsLiveLoveInfo
    );

    var chartLiveUserInfo = new ApexCharts(
        document.querySelector("#area-spaline-liveUserInfo"),
        optionsLiveUserInfo
    );

    chartUpAll.render();
    chartFollowers.render();
    chartContents.render();
    chartUpLiveAll.render();
    chartLiveInfo.render();
    chartLiveLoveInfo.render();
    chartLiveUserInfo.render();
</script>