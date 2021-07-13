<template lang="html">
    <div>
        <div class="container">
            <h2>บันทึกข้อมูล</h2>
            <form action="/customers">
                <div class="form-group">
                    <label>บริษัท</label>
                    <div class="form-check">
                        <input
                            type="radio"
                            class="form-check-input"
                            name="flexRadioDefault"
                            id=""
                            v-model="Company"
                            value="40"
                            checked
                        />
                        <label> CHO </label>
                    </div>
                    <div class="form-check">
                        <input
                            type="radio"
                            class="form-check-input"
                            name="flexRadioDefault"
                            id=""
                            v-model="Company"
                            value="41"
                        />
                        <label> TMT </label>
                    </div>
                </div>
                <div class="form-group">
                    <label>รหัสลูกค้า SAP</label>
                    <input
                        type="text"
                        class="form-control"
                        v-model="CustomerCode"
                    />
                </div>
                <div class="form-group">
                    <label>ชื่อลูกค้า</label>
                    <input type="text" class="form-control" />
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-outline-primary" v-on:click="addCustomer()">
                        เพิ่มข้อมูล
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            CustomerCode: 0,
            Company: 0
        };
    },
    addCustomer(){

    }
};
</script>
