import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-index',
  templateUrl: './index.component.html',
  styleUrls: ['./index.component.css']
})
export class IndexComponent implements OnInit {

  constructor(private router: Router) { }

  ngOnInit() {
    // do init at here for current route.

    setTimeout(() => {
      this.router.navigate(['nextRoute']);
    }, 3000);  //5s
  }

}
