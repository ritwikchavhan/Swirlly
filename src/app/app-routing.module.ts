import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';


import { IndexComponent } from './index/index.component';
import { DashboardComponent } from './dashboard/dashboard.component';


const routes: Routes = [{
  path : 'index', component : IndexComponent
},{
  path : 'nextRoute', component : DashboardComponent
}];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
