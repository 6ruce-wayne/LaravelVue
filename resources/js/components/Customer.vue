<template>
    <div class="container">
        <h2>Customer management</h2>
        <h3>vue.js</h3>
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
                <td>{{customer.Company}}</td>
                <td><button type="button" class="btn btn-primary justify-content-center">แก้ไข</button></td>
                <td><button type="button" class="btn btn-danger justify-content-center">ลบ</button></td>
            </tr>
        </table>
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
