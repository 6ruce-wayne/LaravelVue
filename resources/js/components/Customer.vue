<template>
    <div class="container">
        <h2 class="pd-3">ข้อมูลลูกค้า I-Smart</h2>
        <table class="table table-bordered">
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Contact Person</th>
                <th>Company</th>
                <th>แก้ไข</th>
                <th>ลบ</th>
            </tr>
            <tr v-for="customer in customers" :key="customer.CustomerCode">
                <td>{{customer.CustomerCode}}</td>
                <td>{{customer.CustomerName}}</td>
                <td>{{customer.ContactPerson}}</td>
                <td v-if="customer.Company == 40">CHO</td>
                <td v-else>TMT</td>
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
     this.getCustomerData();
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
         const o = require('odata').o;
         o('https://my336053.sapbydesign.com/sap/byd/odata/ana_businessanalytics_analytics.svc/RPBUPAIDENTIFICATION_Q0001QueryResults?$select=CBUPA_UUID,TBUPA_UUID&$format=json',{
             auth:{
                 username:'itadmin',
                 passowrd:'gobalRR88'
             }
         })
         .get('CBUPA_UUID').then(response=>{
             this.customers=response.data;
         });
     }
 },
 data() {
     return {
         customers:[],
         customer:{
           CustomerCode:0,
           CustomerName:'',
           ContactPerson:'',
           Company:0
         }
     }
 }
}
</script>
