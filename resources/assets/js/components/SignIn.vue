<template>
    <div class="container">
        <div class="content">
            <form class="login-form" action="/SignIn" method="post">
                <h3 class="title">Siri A-Nan Stock Management</h3>
                <input name="_token" type="hidden" v-model="token">
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span>
                    กรุณากรอก Username และ Password เพื่อเข้าสู่ระบบ </span>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Email</label>
                    <div class="input-icon">
                        <i class="fa fa-user"></i>
                        <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="กรุณากรอก email" name="email"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <div class="input-icon">
                        <i class="fa fa-lock"></i>
                        <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="กรุณากรอก password" name="password"/>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-success">
                        เข้าสู่ระบบ <i class="fa fa-sign-in"></i>
                    </button>
                    <div class="clearfix"></div>
                </div>
                <div class="desc">
                    <i class="fa fa-lock"></i> &nbsp; ข้อมูลทั้งหมดถูกจัดเก็บอย่างปลอดภัย และสามารถเข้าถึงได้ด้วยบัญชีผู้ใช้ที่ถูกต้องเท่านั้น
                </div>
            </form>
        </div>
    <div>
</template>
<script>
    export default {
		created: function() {
			this.token = token;
		},
		data: function () {
			return {
				token: ''
			}
		}
    }
</script>

<style scoped>
	.desc{
		color: white;
	}
	.btn {
		margin-top:10px !important;
		width:30%;
		float: right;
	}
	.title {
		font-weight: bold;
		margin-bottom:20px;
	}
	.login .content {
		width: 600px;
		background: rgba(0, 0, 0, 0.7);
	}

	@media (max-width: 480px) {
		.login .content {
			padding: 30px;
			width: 300px;
		}
		.btn {
			margin-top:10px !important;
			width:100%;
		}
	}

</style>