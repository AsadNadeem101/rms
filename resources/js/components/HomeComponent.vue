<template>
<div class="wrapper position-fixed" style="height:100%">
  
  <aside class="main-sidebar sidebar-dark-primary vh-100">
    
    <div class="sidebar">
      <nav class="mt-2">
      <form>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item mt-2">
              <p class="text-white">
                <b>
                    Fabrics
                </b>
              </p>
              <ul class="row" v-for="fabric in fabrics" :key="fabrics.id">
                <li class="mb-4">
                  <input type="radio" v-model="selected_fabric" name="fabric" :value="fabric.name" @change="getCombination()" class="mr-2" />
                  <img :src="getFabricsImage(fabric.image)" height="70px" width="70px"/>
                </li>
              </ul>
          </li>
          <li class="nav-item mt-2">
              <p class="text-white">
                <b>
                    Sleeves
                </b>
              </p>
              <ul class="row" v-for="sleeve in sleeves" :key="sleeves.id">
                <li class="mb-4">
                  <input type="radio" v-model="selected_sleeves" name="sleeves" :value="sleeve.name" @change="getCombination()" class="mr-2" />
                  <img :src="getSleevesImage(sleeve.image)" height="70px" width="70px"/>
                </li>
              </ul>
          </li>
          <li class="nav-item mt-2">
              <p class="text-white">
                <b>
                    Necks
                </b>
              </p>
              <ul class="row" v-for="neck in necks" :key="necks.id">
                <li class="mb-4">
                  <input type="radio" v-model="selected_neck" name="neck" :value="neck.name" @change="getCombination()" class="mr-2" />
                  <img :src="getNecksImage(neck.image)" height="70px" width="70px"/>
                </li>
              </ul>
          </li>
          <li class="nav-item mt-2" v-if="combination">
              <p class="text-white">
                <b>
                    <a style="width: 100%; margin-bottom: 25px" @click="placeOrder" role="button" class="btn btn-success text-white">Order</a>
                </b>
              </p>
          </li>

        </ul>
      </form>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <div class="content-wrapper" style="background-color:#F1F1F1">
    <section class="content " style="width:1500px;height:1000px">
        <div class="row">
            <div class="col-md-12">
                <img :src="getBaseImage()" class="mt-5 offset-md-5"  v-if="selected_fabric == null && selected_sleeves == null && selected_neck == null ">
                <img :src="getCombinationImage()" class="mt-5 offset-md-5"  v-else>
            </div>
        </div>
    </section>
  </div>
  
</div>
</template>
<script>
    export default {
        data(){
            return {
                product:'',
                fabrics:{},
                sleeves:{},
                necks:{},
                selected_fabric:null,
                selected_neck:null,
                selected_sleeves:null,
                combination:null
            }
        },
        methods: {
            get_fabrics()
            {
             axios.get('/api/get_fabrics/'+this.product)
              .then(({data}) =>
              {
                   this.fabrics=data;
        
              })
              .catch(()=>{});  
            },

            get_sleeves()
            {
             axios.get('/api/get_sleeves/'+this.product)
              .then(({data}) =>
              {
                   this.sleeves=data;
        
              })
              .catch(()=>{});  
            },

            get_necks()
            {
             axios.get('/api/get_necks/'+this.product)
              .then(({data}) =>
              {
                   this.necks=data;
        
              })
              .catch(()=>{});  
            },

            getFabricsImage(image)
            {
              return '/product-images/'+this.product+'/Fabric/'+image;
            }
            ,

            getSleevesImage(image)
            {
              return '/product-images/'+this.product+'/sleeves/'+image;
            }
            ,

            getNecksImage(image)
            {
              return '/product-images/'+this.product+'/neck/'+image;
            }
            ,
            getBaseImage()
            {
                return '/product-images/base/'+this.product+'.PNG';
            },
            getCombination()
            {
                axios.get('/api/get_combination/'+this.product+'/'+this.selected_fabric+'/'+this.selected_neck+'/'+this.selected_sleeves)
                .then(({data})=>
                {
                  this.combination=data;
                  this.getCombinationImage();
                })
                .catch()
            },
            getCombinationImage()
            {
                return '/product-images/combinations/'+this.product+'/'+this.combination;
            },
            placeOrder()
            {
              window.location.href ='http://167.71.159.147:8000/product/'+this.product+'/order/'+this.combination;
            }
        },
        created() {
            this.product='';
            this.fabrics={};
            this.sleeves={};
            this.necks={};
            this.product=this.$route.params.product;
            this.get_fabrics();
            this.getFabricsImage();
            this.get_sleeves();
            this.getSleevesImage();
            this.get_necks();
            this.getNecksImage();
        },

    }

                                  
    
</script>

