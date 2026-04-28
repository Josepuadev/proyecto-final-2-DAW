import { ComponentFixture, TestBed } from '@angular/core/testing';

import { SpartEntrenamientos } from './spart-entrenamientos';

describe('SpartEntrenamientos', () => {
  let component: SpartEntrenamientos;
  let fixture: ComponentFixture<SpartEntrenamientos>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [SpartEntrenamientos]
    })
    .compileComponents();

    fixture = TestBed.createComponent(SpartEntrenamientos);
    component = fixture.componentInstance;
    await fixture.whenStable();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
