<template>
  <!-- BEGIN CONTENT-->
  <div id="content">
    <!-- BEGIN TABLE HOVER -->
    <section class="style-default-bright">
      <div class="section-body">
        <h2 class="text-primary">Employees</h2>
        <p>Here are the list of employees.</p>
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Photo</th>
              <th>Name</th>
              <th>Email</th>
              <th>Date of Birth</th>
              <th class="text-right">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="employee in employees" :key="employee.id">
              <td>
                <!--img
                      class="img-circle width-1"
                      src="../assets/img/modules/materialadmin/avatar2666b.jpg?1422538624"
                      alt
                /-->
              </td>
              <td>{{employee.name}}</td>
              <td>{{employee.email}}</td>
              <td>{{employee.date_of_birth | customDateFormat}}</td>
              <td class="text-right">
                <router-link
                  :to="{ path: '/update-employees', query : {id:employee.id}}"
                  tag="button"
                  class="btn btn-icon-toggle"
                  data-toggle="tooltip"
                  data-placement="top"
                  data-original-title="Edit row"
                >
                  <i class="fa fa-pencil"></i>
                </router-link>
                <!--button
                      type="button"
                      class="btn btn-icon-toggle"
                      data-toggle="tooltip"
                      data-placement="top"
                      data-original-title="Delete row"
                    >
                      <i class="fa fa-trash-o"></i>
                </button-->
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <!--end .section-body -->
    </section>
    <!-- END TABLE HOVER -->
  </div>
  <!--end #content-->
</template>
<script>
import employeeService from "./service";
export default {
  data() {
    return {
      employees: null,
    };
  },
  filters: {
    customDateFormat: function (value) {
      if (!value) return "";
      console.log(value);
      var date = new Date(value);
       return (date.getMonth()+1) + "/" + date.getDate()  + "/" + date.getFullYear()
    },
  },

  methods: {
    getEmployees() {
      return axios({
        method: "GET",
        url: "/api/employees",
      });
    },
  },
  async mounted() {
    const employees = await this.getEmployees();
    if (employees.status == 200) {
      this.employees = employees.data;
    }
  },
};
</script>