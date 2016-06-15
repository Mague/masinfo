var app=angular.module('hoteles', [])
app.controller('HotelCntrl',function($http,$scope, $location) {
    var url=$("html").data('url');
    getAllCategorias()
    getAllProvincias()
    $scope.add=function(){
        var nombre=$scope.nombre
        var provincia=$scope.provincia
        var categoria=$scope.categoria
        var portada=$scope.portada
        var qems=$scope.qems
        var bienvenido=$scope.bienvenido
        var habitaciones=$scope.habitaciones
        var instalaciones=$scope.instalaciones
        var servicios=$scope.servicios
        var accesos=$scope.accesos
        var videinterpretacion=$scope.videinterpretacion
        var faq=$scope.faq
        if(nombre.length>0 && provincia.length>0 && categoria.length>0){
            var datos={
                nombre:nombre,
                provincia:provincia,
                categoria:categoria,
                portada:portada,
                qems:qems,
                bienvenido:bienvenido,
                habitaciones:habitaciones,
                instalaciones:instalaciones,
                servicios:servicios,
                accesos:accesos,
                videinterpretacion:videinterpretacion,
                faq:faq
            }
            $.ajax({
                url: url+'index.php/admin/hoteles/add',
                type: 'POST',
                dataType: 'JSON',
                data: datos,
                success:function(data){
                    if(data){
                        $scope.nombre=""
                        $scope.provincia=""
                        $scope.categoria=""
                        $scope.portada=""
                        $scope.qems=""
                        $scope.bienvenido=""
                        $scope.habitaciones=""
                        $scope.instalaciones=""
                        $scope.servicios=""
                        $scope.accesos=""
                        $scope.videinterpretacion=""
                        $scope.faq=""
                    }
                },
                error:function(err,statusText,xhr){
                    console.error(err,statusText,xhr)
                }
            })
            
        }

    }

    function getAllCategorias(){
        $http({
            method:'GET',
            url:url+'index.php/admin/categoria_getAll'
        }).then(function success(res){
            if(res.data.categorias){
                $scope.categorias=res.data.categorias
            }
        }, function error(error){
            if(error){
                console.error(error)
            }
        })
        
    }

    function getAllProvincias(){
        $http({
            method:'GET',
            url:url+'index.php/admin/provincia_getAll'
        }).then(function success(res){
            if(res.data.provincias){
                $scope.provincias=res.data.provincias
                $scope.provincia=""
            }
        }, function error(error){
            if(error){
                console.error(error)
            }
        })
        
    }
});
