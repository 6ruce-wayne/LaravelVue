<template>
    <div class="container">
        <h2>Customer management</h2>
        <h3>vue.js</h3>
        <table class="table table-bordered">
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>แก้ไข</th>
                <th>ลบ</th>
            </tr>
            <tr v-for="customer in customers" :key="customer.CustomerCode">
                <td>{{customer.CBUPA_UUID}}</td>
                <td>{{customer.TBUPA_UUID}}</td>
                <td><button type="button" class="btn btn-outline-primary justify-content-center">แก้ไข</button></td>
                <td><button type="button" class="btn btn-outline-danger justify-content-center">ลบ</button></td>
            </tr>
        </table>
        <a href="/customers/create" class="btn btn-primary active" role="button">เพิ่มข้อมูล</a>
    </div>

</template>
<script>
export default{
 mounted(){
     console.log("Mounted")
     this.getCustomerSAP();
 },
 methods:{
     getCustomerData(){
         console.log("ดึงข้อมูล");
         axios.get('api/customers').then(response=>{
             this.customers=response.data;
         });
     },
     getCustomerSAP(){
         console.log("Get Sap");
         axios.get('https://my336053.sapbydesign.com/sap/byd/odata/ana_businessanalytics_analytics.svc/RPBUPAIDENTIFICATION_Q0001QueryResults?$select=CBUPA_UUID,TBUPA_UUID&$format=json',{
             auth: {
             username:'itadmin',
             password:'gobalRR88'
         },
         withCredentials : true,
         crossDomain: true,
          headers: {"Content-Type": "application/json"}
         }).then(response=>{
             this.customers=response.data;
         });
     }
 },
 data() {
     return {
         customers:[],
         customer:{
           CBUPA_UUID:'',
           TBUPA_UUID:''
         }
     }
 }
}
</script>
