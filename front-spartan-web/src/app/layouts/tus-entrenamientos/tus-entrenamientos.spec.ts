import { ComponentFixture, TestBed } from '@angular/core/testing';

import { TusEntrenamientos } from './tus-entrenamientos';

describe('TusEntrenamientos', () => {
  let component: TusEntrenamientos;
  let fixture: ComponentFixture<TusEntrenamientos>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [TusEntrenamientos]
    })
    .compileComponents();

    fixture = TestBed.createComponent(TusEntrenamientos);
    component = fixture.componentInstance;
    await fixture.whenStable();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
