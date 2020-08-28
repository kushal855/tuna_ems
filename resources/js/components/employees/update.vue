<template>
  <!-- BEGIN CONTENT-->
  <div id="content">
    <!-- BEGIN TABLE HOVER -->
    <section class="style-default-bright">
      <div class="section-body">
        <!-- BEGIN INTRO -->
        <div class="row">
          <div class="col-lg-12">
            <h2 class="text-primary">Edit Employee</h2>
          </div>
          <!--end .col -->
          <!--end .col -->
        </div>
        <!--end .row -->
        <!-- END INTRO -->

        <!-- BEGIN HORIZONTAL FORM - BASIC ELEMENTS-->
        <div class="card">
          <div class="card-body">
            <form class="form-horizontal" role="form">
              <div class="" :class="[!$v.formData.name.required ? 'has-error' : 'has-success', 'form-group']" >
                <label for="regular13" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="regular13" v-model="formData.name" />
                </div>
              </div>
              <div class="form-group" :class="[(!$v.formData.email.required || !$v.formData.email.email ) ? 'has-error' : 'has-success', 'form-group']">
                <label for="password13" class="col-sm-2 control-label">email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="password13" v-model="formData.email" />
                </div>
              </div>
              <div class="form-group">
                <label for="dob13" class="col-sm-2 control-label">Date of Birth</label>
                <div class="col-sm-10">
                  <datepicker
                    input-class="form-control"
                    format="MM/dd/yyyy"
                    name="uniquename"
                    :value="formData.date_of_birth"
                  ></datepicker>
                </div>
              </div>
            </form>
          </div>
          <!--end .card-body -->
        </div>
        <!--end .card -->
      </div>
      <!--end .section-body -->
    </section>
    <!-- END TABLE HOVER -->
  </div>
  <!--end #content-->
</template>
<script>
import Datepicker from "vuejs-datepicker";
import { required, minLength, email } from "vuelidate/lib/validators";
export default {
  data() {
    return {
      id: this.$route.query.id,
      employee: null,
      formData: {
        name: "",
      },
    };
  },
  components: {
    Datepicker,
  },
  validations: {
    formData: {
      name: {
        required,
        minLength: minLength(4),
      },
      email: {
        required,
        email,
      },
    },
  },
  methods: {
    getEmployee() {
      return axios({
        method: "GET",
        url: `/api/employees/${this.id}`,
      });
    },
  },
  async mounted() {
    const employee = await this.getEmployee();
    console.log(employee);
    if (employee.status == 200) {
      this.employee = employee.data;
      this.formData = employee.data;
    }
  },
};
</script>
<style scoped>
form {
  min-height: 500px;
}
</style>